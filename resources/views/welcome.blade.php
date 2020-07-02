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
        <input name="categories[]" value="0" type="radio" id="contactChoice1">
        <label>All</label>
    
        <input type="radio" id="contactChoice2"
            name="categories[]" value="1">
        <label>Notebooks</label>
    
        <input type="radio" id="contactChoice3"
            name="categories[]" value="2">
        <label>Telephone</label>

        <input type="radio" id="contactChoice3"
            name="categories[]" value="3">
        <label>Tablets</label>


        <button type="reset" id="configreset" value="Reset">Clear Filters</button>

    </div>
</form>

<form id="brands_filter"  method="GET">
<legend>Filter on Brands</legend>
    <div>
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


    </div>
</form>

<form method="GET" id="sort_filter_reset">
    <div>
        <label>Select group by :</label>    
        <select name="sort" id="sort_filter">
            <option  value="1">At a price initially expensive</option>
            <option  value="2">At a price initially cheap</option>
            <option  value="3">By name, A-Z</option>
            <option  value="4">By name, Z-A</option>
        </select>
    </div>
 </form>

</div>
<ul class="products"></ul>

    
    </body>
</html>
