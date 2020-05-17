$(document).ready(function(){
    $("#aboutme").toggle();

    var industry=['Accounting / Finance','Advertising / PR / MR / Event Management','Agriculture / Dairy','Animation / Gaming','Architecture / Interior Design','Automobile / Auto Anciliary / Auto Components','Aviation / Aerospace Firms','Banking / Financial Services / Broking','BPO / Call Centre / ITES','Brewery / Distillery','Broadcasting','Ceramics / Sanitary ware','Chemicals / PetroChemical / Plastic / Rubber','Construction / Engineering / Cement / Metals','Consumer Electronics / Appliances / Durables','Courier / Transportation / Freight / Warehousing','Education / Teaching / Training','Electricals / Switchgears','Export / Import','Facility Management','Fertilizers / Pesticides','FMCG / Foods / Beverage','Food Processing','Fresher / Trainee / Entry Level','Gems / Jewellery','Glass / Glassware','Government / Defence','Heat Ventilation / Air Conditioning','Industrial Products / Heavy Machinery','Insurance','Iron and Steel','IT-Hardware & Networking','IT-Software / Software Services','KPO / Research / Analytics','Legal','Media / Entertainment / Internet','Internet / Ecommerce','Leather','Medical / Healthcare / Hospitals','Medical Devices / Equipments','Mining / Quarrying','NGO / Social Services / Regulators / Industry Associations','Office Equipment / Automation','Oil and Gas / Energy / Power / Infrastructure','Pulp and Paper','Pharma / Biotech / Clinical Research','Printing / Packaging','Publishing','Real Estate / Property','Recruitment / Staffing','Retail / Wholesale','Security / Law Enforcement','Semiconductors / Electronics','Shipping / Marine','Strategy / Management Consulting Firms','Sugar','Telecom/ISP','Textiles / Garments / Accessories','Travel / Hotels / Restaurants / Airlines / Railways','Tyres','Water Treatment / Waste Management','Wellness / Fitness / Sports / Beauty','Other'];

    addDropDown($("#industry_type"),industry);

    function addDropDown(element,ddlist){
        element.append("<option></option>");
        for(var i=0;i<ddlist.length;i++){
            element.append("<option>"+ ddlist[i]+ "</option>");
        }
    }

    $(document).on('click', ".item", function (e) {
        e.preventDefault();
        $('.collapsable div').toggle();

        var id=e.target.hash;
        
    });

    $(document).on('click','#createprofile',function(){
        $("#profileSpinner").show();

        var array = $("#profileFrm").serializeArray();
        var json={};
    
        jQuery.each(array, function() {
            json[this.name] = this.value || '';
        });

        console.log(json);

        $.ajax({
            url: "addprofile.php",
            method: 'POST',
            data: JSON.stringify( json),
            contentType:"application/json",
            dataType: 'json',            
            success: function (data1, status, xhr) {
                $("#profileSpinner").hide();
                if (data1["status"] === "failure") {
                    $("#profileMessage").html(data1["message"]);
                } else {
                    $("#profileMessage").html(data1["message"]);                    
                }
            }
        });
    });
});