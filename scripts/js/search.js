$(document).ready(function(){
    $('#from_premium_institute').tagator({autocomplete: yes_no,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#open_for_outside_india').tagator({autocomplete: yes_no,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#open_for_divorcee').tagator({autocomplete: yes_no,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#fromage').tagator({autocomplete: age_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#toage').tagator({autocomplete: age_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#fromheight').tagator({autocomplete: height,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#toheight').tagator({autocomplete: height,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#religion').tagator({autocomplete: religion,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#country').tagator({autocomplete: country,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    //$('#state').tagator({autocomplete: states["India"],useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#marital_status').tagator({autocomplete: marital_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#manglik').tagator({autocomplete: manglik,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#believes_in_horoscope').tagator({autocomplete: horoscope,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#education_qualification').tagator({autocomplete: ug,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#occupation').tagator({autocomplete: occupation,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#residential_type').tagator({autocomplete: residential_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#affluence_level').tagator({autocomplete: affluence_level,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#family_type').tagator({autocomplete: family_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#willing_to_stay').tagator({autocomplete: willing_to_stay,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#food_habits').tagator({autocomplete: food_habits,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#drink').tagator({autocomplete: drink,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#smoke').tagator({autocomplete: smoke,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#looks').tagator({autocomplete: looks,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#body_type').tagator({autocomplete: body_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#communication').tagator({autocomplete: communication,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#complexion').tagator({autocomplete: complexion,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
  
    $('#income_currency').tagator({autocomplete: all_currency,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#wedding_currency').tagator({autocomplete: all_currency,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#family_currency').tagator({autocomplete: all_currency,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#net_currency').tagator({autocomplete: all_currency,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#data_source').tagator({autocomplete: source,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    
    function loadReligion(){
        var religion_text=$("#religion").val();
        if(caste.hasOwnProperty(religion_text)){
            $("#caste_div").removeClass("d-none");   
            $('#caste').tagator({autocomplete: caste[religion_text],useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});         
        }
    }

    function fillIncome(income,field1, field2){
        var final_income_bracket=[];
        if(currency_income_bracket.hasOwnProperty(income)){
            final_income_bracket=currency_income_bracket[income];
        }

        field1.tagator({autocomplete: final_income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
        field2.tagator({autocomplete: final_income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});


        field1.tagator('autocomplete', final_income_bracket);     
        field1.tagator('refresh');

        field2.tagator('autocomplete', final_income_bracket);     
        field2.tagator('refresh');

        if(final_income_bracket.length<1){
            field1.val('');
            field2.val('');
        }
    }

    $(document).on('change', "#country", function (e) {
        
        var _country=$("#country").val();
        currency.length=0;
        var countries=_country.split(',');
        var state_dropdown=[];
        countries.forEach(country=>{
            if(states.hasOwnProperty(country)){            
                states[country].forEach(state=>{
                    state_dropdown.push(state);
                });
            }
        });
        
        
        if(state_dropdown!==undefined && state_dropdown.length>0){
            $('#state').tagator({autocomplete: state_dropdown,useDimmer: true,allowAutocompleteOnly: false,showAllOptionsOnFocus: true,maxTags:1});            
            $('#state').tagator('autocomplete', state_dropdown);     
            $('#state').tagator('refresh');
        }
           
        
        $('#state').prop("disabled", false);
        
        
    });


    $(document).on('change', "#religion", function (e) {
        loadReligion();
    });

    $(document).on('change',"#income_currency",function(e){
        fillIncome($("#income_currency").val(),$("#annual_income1"),$("#annual_income2"));
    });

    $(document).on('change',"#wedding_currency",function(e){
        fillIncome($("#wedding_currency").val(),$("#wedding_budget1"),$("#wedding_budget2"));
    });

    $(document).on('change',"#family_currency",function(e){
        fillIncome($("#family_currency").val(),$("#family_income1"),$("#family_income2"));
    });

    $(document).on('change',"#net_currency",function(e){
        fillIncome($("#net_currency").val(),$("#net_worth1"),$("#net_worth2"));
    });

    $(document).on('click',"#searchprofile", function(e) {
        e.preventDefault();
        
        $("#profileSpinner").show();
        var array = $("#searchForm").serializeArray();
        var json={};

        jQuery.each(array, function() {
            json[this.name] = this.value || '';
        });

        $.ajax({
            url: "api/search.php",
            method: 'POST',
            data: JSON.stringify(json),
            contentType:"application/json",
            dataType: 'json',            
            success: function (data1, status, xhr) {
                $("#profileSpinner").hide();
                if (data1["status"] === "failure") {
                    var message='<div class="alert alert-danger">' + data1["message"] +"</div>";
                    $("#profileMessage").html(message);
                } else {
                    window.location.href=data1["data"];
                }
            }
        });
    });
});