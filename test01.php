<html>
<head></head>
<body>
    List : <input type="text" name="listnum" id="listnum">
    </br>
    ค้นหา : <input type="text" name="findnum" id="findnum"> <button onclick="myFunction()">ค้นหา</button>
    </br>
    <h1>ประเภทการค้นหา</h1>
    <select name="search" id="search">
        <option value="1">Linear Search</option>
        <option value="2">Binary Search</option>
        <option value="3">Bubble Search</option>
    </select>
    </br>
    <h1>ผลลัพธ์</h1>
    <p id="value"></p>
    <p id="value_search"></p>
    <p id="condition_search"></p>
    </br>
    <script>
    function myFunction(){
        var x = document.getElementById("listnum").value;
        var s = document.getElementById("findnum").value;
        var search_s = document.getElementById("search");
        var strSearch = search_s.options[search_s.selectedIndex].value;
        var numArray = x.split(",");
        var condition_s = linearSearch(numArray,s);
        console.log(strSearch);
        switch (strSearch) {
        case 1:
            condition_s = linearSearch(numArray,s);
            break;
        case 2:
            condition_s = "Binary Search";
            break;
        case 3:
            condition_s = "Bubble Search";
            break;
        }
        
        document.getElementById("value").innerHTML = "List : [" + numArray + "]";
        document.getElementById("value_search").innerHTML = "search :" + s;
        document.getElementById("condition_search").innerHTML = "Result::: </br>" + condition_s;
    }
    function linearSearch(arr, find) {
        var Result;
        for (var i=0; i<arr.length; i++) {
        if (arr[i] == find) {
            Result += "Round " + (i+1)+" ===> "+ find + " = " + arr[i] + " Found!!</br>";
        }else{
            Result += "Round " + (i+1)+" ===> "+ find + " != " + arr[i] + "</br>";
        }
        }
        return Result;
    }

    </script> 
</body>
</html>