<html>
<head>
  <style type="text/css">
        /* Recommended styles */
    
        .megaselectlistcolumn {
            width: 31%;
            margin: 0 1%;
            float: left;
        }
        
        .megaselectlist .currentitem {
            padding: 0;
            border: 0.1em dotted Green;
            color: Black;
        }
    
        /* Optional styles */
        
        .megaselectlist {
            background-color: #F5F5F5;
            border: 1px solid Silver;
        }
        
        .megaselectlistcolumn > h2 {
            font-size: 1em;
            background-color: #ECECEC;
            text-align: center;
            padding: 2px 0;
            margin: 0;
        }
        
        .megaselectlist > p {
            margin: 0.2em;
        }
        
        .megaselectlistcolumn > ul {
            padding-left: 1em;
            margin: 0;
            color: Gray;
        }
        
        .megaselectlistcolumn > ul > li {
            cursor: pointer;
            padding: 0.1em;
            font-size: small;
        }
        
        .megaselectlistcolumn > ul > li:hover {
            background-color: #ECECEC;
            color: Black;
        }
        
        /* CSS based expand and collapse */
        
        #megaselectlist1 .megaselectlistoptions {
            display: none;
        }
        
        #megaselectlist1:hover .megaselectlistoptions {
            display: block;
        }

        /*
        @sarath
        */
        .mselect{
            width: 31%;
        }
    </style>
</head>

<body>
    <form>
       <!--  -->
       <label class="toggle-collapse">+++</label>
       <div class="collapseC" style="" >
       <p class="mselect">
             <label for="location1">Select an item</label>
                
                    <select  name="example2" id="location1">
                        <optgroup label="Hampshire">
                            <option value="1">Andover</option>
                            <option value="2">Alton</option>
                            <option value="3">Basingstoke</option>
                            <option value="4">Fareham</option>
                            <option value="5">Portsmouth</option>
                            <option value="6">Romsey</option>
                            <option value="7">Southampton</option>
                            <option value="8">Waterlooville</option>
                            <option value="9">Winchester</option>
                        </optgroup>
                        <optgroup label="Dorset">
                            <option value="9">Blandford</option>
                            <option value="10">Bournemouth</option>
                            <option value="11">Christchurch</option>
                            <option value="12">Ferndown</option>
                            <option value="13">Poole</option>
                            <option value="14">Verwood</option>
                            <option value="15">Wareham</option>
                            <option value="16">Weymouth</option>
                            <option value="17">Wimbourne</option>
                        </optgroup>
                        <optgroup label="Wiltshire">
                            <option value="18">Devizes</option>
                            <option value="19">Frome</option>
                            <option value="20">Salisbury</option>
                            <option value="21">Trowbridge</option>
                            <option value="22">Warminster</option>
                            <option value="23">Westbury</option>
                        </optgroup>
                    </select>
                    </p>
        <p class="mselect">
             <label for="location2">Select an item</label>
                
                    <select  name="example2" id="location2">
                        <optgroup label="Hampshire">
                            <option value="1">Andover</option>
                            <option value="2">Alton</option>
                            <option value="3">Basingstoke</option>
                            <option value="4">Fareham</option>
                            <option value="5">Portsmouth</option>
                            <option value="6">Romsey</option>
                            <option value="7">Southampton</option>
                            <option value="8">Waterlooville</option>
                            <option value="9">Winchester</option>
                        </optgroup>
                        <optgroup label="Dorset">
                            <option value="9">Blandford</option>
                            <option value="10">Bournemouth</option>
                            <option value="11">Christchurch</option>
                            <option value="12">Ferndown</option>
                            <option value="13">Poole</option>
                            <option value="14">Verwood</option>
                            <option value="15">Wareham</option>
                            <option value="16">Weymouth</option>
                            <option value="17">Wimbourne</option>
                        </optgroup>
                        <optgroup label="Wiltshire">
                            <option value="18">Devizes</option>
                            <option value="19">Frome</option>
                            <option value="20">Salisbury</option>
                            <option value="21">Trowbridge</option>
                            <option value="22">Warminster</option>
                            <option value="23">Westbury</option>
                        </optgroup>
                    </select>
                    </p>
        <p class="mselect">
             <label for="location3">Select an item</label>
                
                    <select  name="example2" id="location3">
                        <optgroup label="Hampshire">
                            <option value="1">Andover</option>
                            <option value="2">Alton</option>
                            <option value="3">Basingstoke</option>
                            <option value="4">Fareham</option>
                            <option value="5">Portsmouth</option>
                            <option value="6">Romsey</option>
                            <option value="7">Southampton</option>
                            <option value="8">Waterlooville</option>
                            <option value="9">Winchester</option>
                        </optgroup>
                        <optgroup label="Dorset">
                            <option value="9">Blandford</option>
                            <option value="10">Bournemouth</option>
                            <option value="11">Christchurch</option>
                            <option value="12">Ferndown</option>
                            <option value="13">Poole</option>
                            <option value="14">Verwood</option>
                            <option value="15">Wareham</option>
                            <option value="16">Weymouth</option>
                            <option value="17">Wimbourne</option>
                        </optgroup>
                        <optgroup label="Wiltshire">
                            <option value="18">Devizes</option>
                            <option value="19">Frome</option>
                            <option value="20">Salisbury</option>
                            <option value="21">Trowbridge</option>
                            <option value="22">Warminster</option>
                            <option value="23">Westbury</option>
                        </optgroup>
                    </select>
                    </p>

       </div>
      
       <!--  -->
       <input type="submit" />
    </form>
</body>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.megaselectlist.js"></script>
<script type="text/javascript" src="maketoggle.jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

            $(".toggle-collapse").makeToggle(".collapseC");

            //$(".collapseC").hide();
            // Single select
            $("#location1").megaselectlist({ animate: true, animateevent: "click" });
            $("#location2").megaselectlist({ animate: true, animateevent: "click" });
            $("#location3").megaselectlist({ animate: true, animateevent: "click" });
            
            // Multiple select, with a maximum number of items
            // $("#example3").megaselectlist({ animate: true, animateevent: "click", multiple: true, maximumitems: 3 });
        });
</script>
</html>