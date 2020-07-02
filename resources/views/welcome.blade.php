<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
  
    <body>
    <div>

<form  id="category_filter"  method="GET" style="margin-bottom:25px;"> 
    <div>
    <legend>Filter on Categories</legend>
        <input name="categories[]" value="0" type="radio">
        <label>All</label>

        <input type="radio" name="categories[]" value="1">
        <label>Notebooks</label>
    
        <input type="radio" name="categories[]" value="2">
         <label>Telephone</label>

        <input type="radio" name="categories[]" value="3">
        <label>Tablets</label>


        <button type="reset" id="configreset" value="Reset">Clear Filters</button>

    </div>
</form>

<form id="brands_filter"  method="GET" style="margin-bottom:25px;">
    <legend>Filter on Brands</legend>
        <input type="checkbox"name="brands[]" value="1">
        <label>Apple</label>
    
        <input type="checkbox" name="brands[]" value="2">
        <label>Samsung</label>

        <input type="checkbox" name="brands[]" value="3">
        <label>Acer</label>

        <input type="checkbox" name="brands[]" value="4">
        <label>Xiomi</label>

        <input type="checkbox" name="brands[]" value="5">
        <label>Asus</label>
</form>

<form method="GET" id="sort_filter_reset">
        <label>Select group by :</label>    
        <select name="sort" id="sort_filter">
            <option  value="2">At a price initially expensive</option>
            <option  value="1">At a price initially cheap</option>
            <option  value="3">By name, A-Z</option>
            <option  value="4">By name, Z-A</option>
        </select>
 </form>

</div>
<ul class="products"></ul>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script>
    $(function() {
        const filtertUrl = "/api/filter";
        let hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        jQuery.get( filtertUrl+"?"+hashes, function( data ) {
        data.map(item => {
            jQuery(".products").append(`<li>Name: ${item.name} <br> Price: ${item.price} $ 
            <br> Brand: ${item.brand.name} <br> Category: ${item.category.name} <br><img src="${item.image_url}"> </li>`);
        });

        jQuery('input[name="categories[]"]').on("change", function(e){
            e.preventDefault();
            let querry = " "
            
            brand_hashes = $( "#brands_filter" ).serialize();
            let recursiveDecodedBrand = decodeURIComponent( brand_hashes );

            sort_hashes = $( "#sort_filter_reset" ).serialize();
            let recursiveDecodedSort = decodeURIComponent( sort_hashes );

        

            if  ( $('input[name="categories[]"]:checked').val() != 0){
                hashes = $( "#category_filter" ).serialize();
                var recursiveDecoded = decodeURIComponent( hashes );
                querry = hashes 
            } 
            jQuery.get( filtertUrl+"?"+querry+"&"+recursiveDecodedBrand+"&"+recursiveDecodedSort, function( data ) {
                jQuery(".products").html(" ");
                data.map(item => {
                jQuery(".products").append(`<li>Name: ${item.name} <br> Price: ${item.price} $<br> Brand: ${item.brand.name} <br> Category: ${item.category.name} <br><img src="${item.image_url}">  </liName:>`);
            });
        });
    });
  });

  jQuery('input[name="brands[]"]').on("change", function(e){
            e.preventDefault();
            let querry = " "

            cat_hashes = $( "#category_filter" ).serialize();
            let recursiveDecodedCat = decodeURIComponent( cat_hashes );

            sort_hashes = $( "#sort_filter_reset" ).serialize();
            let recursiveDecodedSort = decodeURIComponent( sort_hashes );

            if  ( $('input[name="brands[]"]:checked').val() != 0){
                hashes = $( "#brands_filter" ).serialize();
                var recursiveDecoded = decodeURIComponent( hashes );
                querry = hashes 
            } 
            jQuery.get( filtertUrl+"?"+querry+"&"+recursiveDecodedCat+"&"+recursiveDecodedSort, function( data ) {
                jQuery(".products").html(" ");
                data.map(item => {
                jQuery(".products").append(`<li>Name: ${item.name} <br> Price: ${item.price} $<br> Brand: ${item.brand.name} <br> Category: ${item.category.name} <br><img src="${item.image_url}">  </li>`);
            }); 
        });
    });

    jQuery("#sort_filter").on("change", function(e){
            e.preventDefault();

            let querry = " "

            sort_hashes = $( "#sort_filter_reset" ).serialize();
            let recursiveDecodedSort = decodeURIComponent( sort_hashes );

            cat_hashes = $( "#category_filter" ).serialize();
            let recursiveDecodedCat = decodeURIComponent( cat_hashes );

            brand_hashes = $( "#brands_filter" ).serialize();
            let recursiveDecodedBrand = decodeURIComponent( brand_hashes );

            if  ( $("#sort_filter").children('option:selected').val() != 0){
                querry = "sort="+$("#sort_filter").children('option:selected').val() 
            } 
            jQuery.get( filtertUrl+"?"+querry+"&"+recursiveDecodedSort+"&"+recursiveDecodedCat+"&"+recursiveDecodedBrand, function( data ) {
                jQuery(".products").html(" ");
                data.map(item => {
                jQuery(".products").append(`<li>Name: ${item.name} <br> Price: ${item.price} $<br> Brand: ${item.brand.name} <br> Category: ${item.category.name} <br><img src="${item.image_url}">  </li>`);
            });
        });
    });
    
    $('#configreset').click(function(){
            $('#category_filter')[0].reset();
            $('#brands_filter')[0].reset();
            $('#sort_filter_reset')[0].reset();

            jQuery.get( filtertUrl, function( data ) {
                jQuery(".products").html(" ");
                data.map(item => {
                jQuery(".products").append(`<li>Name: ${item.name} <br> Price: ${item.price} $<br> Brand: ${item.brand.name} <br> Category: ${item.category.name} <br><img src="${item.image_url}">  </li>`);
            });
        });

    });

});

</script>
    
    </body>
</html>
