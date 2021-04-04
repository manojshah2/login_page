$(document).ready(function(){
    
    


    
    $('#from_premium_institute').tagator({autocomplete: yes_no,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#open_for_outside_india').tagator({autocomplete: yes_no,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#open_for_divorcee').tagator({autocomplete: yes_no,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_partner_occupation').tagator({autocomplete: pp_partner_occupation,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#willing_to_stay').tagator({autocomplete: willing_to_stay,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#residential_type').tagator({autocomplete: residential_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    //$('#pp_income').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    //$('#pp_income2').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#family_income').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#family_income2').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    //$('#wedding_budget').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    //$('#wedding_budget2').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
   // $('#net_worth').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#height').tagator({autocomplete: height,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_min_height').tagator({autocomplete: height,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_max_height').tagator({autocomplete: height,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_fromage').tagator({autocomplete: age_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_toage').tagator({autocomplete: age_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pp_religion').tagator({autocomplete: religion,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    
    $('#pp_country').tagator({autocomplete: country,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_state').tagator({autocomplete: states["India"],useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_marital_status').tagator({autocomplete: marital_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_education_qualification').tagator({autocomplete: ug,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_employed_as').tagator({autocomplete: employed_as,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_smoker').tagator({autocomplete: smoke,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_drinker').tagator({autocomplete: drink,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_food_habits').tagator({autocomplete: food_habits,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_manglik').tagator({autocomplete: manglik,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_mother_tongue').tagator({autocomplete: mother_tongue,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_complexion').tagator({autocomplete: complexion,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_body_type').tagator({autocomplete: body_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_have_children').tagator({autocomplete: have_children,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});
    $('#pp_challenged').tagator({autocomplete: special_case,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});


    $('#source').tagator({autocomplete: source,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#gender').tagator({autocomplete: gender,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#marital_status').tagator({autocomplete: marital_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#has_children').tagator({autocomplete: have_children,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#occupation').tagator({autocomplete: occupation,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#country_of_residence').tagator({autocomplete: country,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    //$('#state_of_residence').tagator({autocomplete: state['India'],useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#residential_status').tagator({autocomplete: residential_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#mother_tongue').tagator({autocomplete: mother_tongue,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#special_case').tagator({autocomplete: special_case,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#religion').tagator({autocomplete: religion,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#ug').tagator({autocomplete: ug,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#pg').tagator({autocomplete: pg,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#employed_in').tagator({autocomplete: employed_in,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#employed_as').tagator({autocomplete: employed_as,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#father_is').tagator({autocomplete: occupation1,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#mother_is').tagator({autocomplete: occupation1,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#family_value').tagator({autocomplete: family_value,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#family_type').tagator({autocomplete: family_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#affluence_level').tagator({autocomplete: affluence_level,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#unmarried_sisters').tagator({autocomplete: children_option,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#married_sisters').tagator({autocomplete: children_option,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#unmarried_brothers').tagator({autocomplete: children_option,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#married_brothers').tagator({autocomplete: children_option,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#industry_type').tagator({autocomplete: industry,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#family_based_out_of').tagator({autocomplete: country,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#native_country').tagator({autocomplete: country,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#native_state').tagator({autocomplete: states["India"],useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#believes_in_horoscope').tagator({autocomplete: horoscope,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#manglik').tagator({autocomplete: manglik,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#mobile_verified').tagator({autocomplete: verified,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#emailid_verified').tagator({autocomplete: verified,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#aadhar_verified').tagator({autocomplete: verified,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#aadhar_proof').tagator({autocomplete: proof,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#body_type').tagator({autocomplete: body_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#food_habits').tagator({autocomplete: food_habits,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#hair_type').tagator({autocomplete: hair_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#looks').tagator({autocomplete: looks,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#specs').tagator({autocomplete: specs,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#food_habits').tagator({autocomplete: food_habits,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#communication').tagator({autocomplete: communication,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#complexion').tagator({autocomplete: complexion,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#smoke').tagator({autocomplete: smoke,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#drink').tagator({autocomplete: drink,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#calling_for').tagator({autocomplete: calling_for,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#calling_status').tagator({autocomplete: calling_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#lead_status').tagator({autocomplete: lead_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#lead_biodata').tagator({autocomplete: rec_option,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#lead_matrimony_picture').tagator({autocomplete: rec_option,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#meeting_type').tagator({autocomplete: meeting_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#meeting_status').tagator({autocomplete: meeting_status,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#rejection_reason').tagator({autocomplete: rejection_reason,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#client_type').tagator({autocomplete: client_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#duration').tagator({autocomplete: duration,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
    $('#package_type').tagator({autocomplete: package_type,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});

    

    String.prototype.toProperCase = function () {
        return this.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
    };

    String.prototype.toTitleCase = function() {
        var i, j, str, lowers, uppers;
        str = this.replace(/([^\W_]+[^\s-]*) */g, function(txt) {
          return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
        });
      
        // Certain minor words should be left lowercase unless 
        // they are the first or last words in the string
        lowers = ['A', 'An', 'The', 'And', 'But', 'Or', 'For', 'Nor', 'As', 'At', 
        'By', 'For', 'From', 'In', 'Into', 'Near', 'Of', 'On', 'Onto', 'To', 'With'];
        for (i = 0, j = lowers.length; i < j; i++)
          str = str.replace(new RegExp('\\s' + lowers[i] + '\\s', 'g'), 
            function(txt) {
              return txt.toLowerCase();
            });
      
        // Certain words such as initialisms or acronyms should be left uppercase
        uppers = ['Id', 'Tv'];
        for (i = 0, j = uppers.length; i < j; i++)
          str = str.replace(new RegExp('\\b' + uppers[i] + '\\b', 'g'), 
            uppers[i].toUpperCase());
      
        return str;
      }

    $(".blur_text").blur(function (e) {
        e.target.value=e.target.value.toProperCase();
    });

    $(".title_text").blur(function (e) {
        e.target.value=e.target.value.toTitleCase();
    });
    var params=window.location.search;
    if(params.length<2){
        $("#uploadLI").attr("class","d-none");
    }
    

    function addDropDown(element,ddlist){
        element.append("<option></option>");
        for(var i=0;i<ddlist.length;i++){
            element.append("<option>"+ ddlist[i]+ "</option>");
        }
    }

    loadReligion();
    loadImages();

    

    function loadReligion(){
        var religion_text=$("#religion").val();
        if(caste.hasOwnProperty(religion_text)){
            $("#caste_div").removeClass("d-none");   
            $('#caste').tagator({autocomplete: caste[religion_text],useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});         
        }
    }
    function remove_non_ascii(str) {
  
        if ((str===null) || (str===''))
             return false;
       else
         str = str.toString();
        
        return str.replace(/[^\x20-\x7E]/g, '');
      }

    function getIncome(income_str){
        console.log(income_str);
        if (income_str===undefined || income_str.length<1){
            return -1;
        }

        income_str=remove_non_ascii(income_str);
        
        var patt=/[0-9\.]+/;
        income_str=income_str.replace("Rs.","");
        var number_income=patt.exec(income_str)[0];
        if (income_str.search("Crore")>0){
            number_income=number_income*100;
        }
        if(income_str.search("1000+")>0){
            number_income=number_income*10;
        }
        return number_income;
    }

    $(document).on('change', "#religion", function (e) {
        loadReligion();
    });

    $(document).on('change',"#dob",function(e){
        var today = new Date();
        var birthDate = new Date($('#dob').val());
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }
        $("#age").val(age);
    });

    $(document).on('change', "#pp_religion", function (e) {
        
        
    });
    

    $(document).on('click', "#pp_caste", function (e) {
        var pp_caste_suggestor=[];    
        //$('#pp_caste').tagator();
        //$('#pp_caste').tagator('destroy');       
        var religion=$("#pp_religion").val();
        
        var _religion=religion.split(',');
        
        for(var i=0;i<_religion.length;i++){            
            if(caste.hasOwnProperty(_religion[i])){
                var cl=caste[_religion[i]];
                pp_caste_suggestor=pp_caste_suggestor.concat(cl);
            }        
        }
        $('#pp_caste').tagator({autocomplete: pp_caste_suggestor,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:-1});                 
        
        
    });

 

    $(document).on('change', "#country_of_residence", function (e) {
        var country=$("#country_of_residence").val();
        currency.length=0;
        if(currency_mapping.hasOwnProperty(country)){            
            currency.push(currency_mapping[country]);            
        }else{
            currency.push(default_currency);
        }
        
        var state_dropdown = states[country];
        console.log(state_dropdown!==undefined && state_dropdown.length>0);
        if(state_dropdown!==undefined && state_dropdown.length>0){
            $('#state_of_residence').tagator({autocomplete: state_dropdown,useDimmer: true,allowAutocompleteOnly: false,showAllOptionsOnFocus: true,maxTags:1});            
            $('#state_of_residence').tagator('autocomplete', state_dropdown);     
            $('#state_of_residence').tagator('refresh');
        }
           
        
        $('#state_of_residence').prop("disabled", false);
        
        if(currency.length>0){
            $('#income_currency').tagator({autocomplete: currency,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
            $('#income_currency').tagator('refresh');
            $('#income_currency').prop("disabled", false);
        }else{
            
        }
    });

    $(document).on('change',"#state_of_residence", function(e){
        var state_value=$("#state_of_residence").val();
        
        if(city_mapping.hasOwnProperty(state_value)){
            var city_value=city_mapping[state_value];
            $('#city').tagator({autocomplete: city_value,useDimmer: true,allowAutocompleteOnly: false,showAllOptionsOnFocus: true,maxTags:1});
            $('#city').tagator('autocomplete', city_value);
            $('#city').tagator('refresh');
            $('#city').prop("disabled", false);
        }
    });
    $(document).on('change', "#income_currency", function (e) {
        var income_currency=$("#income_currency").val();
        income_bracket.length=0;
        
        
        if(currency_income_bracket.hasOwnProperty(income_currency)){            
            income_bracket=income_bracket.concat(currency_income_bracket[income_currency]);            
        }else{
            income_bracket=income_bracket.concat(currency_income_bracket["INR (Indian Rupee)"]);
        }
        
        var income_bracket1=income_bracket.concat(['and above']);
        
        if(income_currency.length>1){
            
            $('#annual_income1').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
            $('#annual_income2').tagator({autocomplete: income_bracket1,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
            //$('#income_currency').tagator({autocomplete: currency,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
            $('#annual_income1').tagator('autocomplete', income_bracket);
            $('#annual_income2').tagator('autocomplete', income_bracket1);
            $('#annual_income1').tagator('refresh');
            $('#annual_income2').tagator('refresh');
            $('#annual_income1').prop("disabled", false);            
            $('#annual_income2').prop("disabled", false);
        }else{
            
        }
    });

    $(document).on('change', "#pp_country", function (e) {
        var countries=$("#pp_country").val();
        var countries_list=countries.split(',');
        console.log(countries_list);
        currency.length=0;
        var i=0;
        for(i=0;i<countries_list.length;i++){
            var country=countries_list[i];
            console.log(country);
            if(currency_mapping.hasOwnProperty(country)){            
                currency.push(currency_mapping[country]);            
            }else{
                currency.push(default_currency);
            }
        }
        console.log(currency);
        var state_dropdown = states[country];
        console.log(state_dropdown!==undefined && state_dropdown.length>0);
        if(state_dropdown!==undefined && state_dropdown.length>0){
        
            $('#pp_state').tagator({autocomplete: state_dropdown,useDimmer: true,allowAutocompleteOnly: false,showAllOptionsOnFocus: true,maxTags:1});
            
        }
        $('#pp_state').tagator('autocomplete', state_dropdown);
        $('#pp_state').tagator('refresh');
        $('#pp_state').prop("disabled", false);
        
        if(countries_list.length>0){
            $('#pp_income_currency').tagator({autocomplete: currency,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
            $('#pp_income_currency').tagator('refresh');
            $('#pp_income_currency').prop("disabled", false);
        }else{
            
        }
    });

    $(document).on('change', "#pp_income_currency", function (e) {
        var income_currency=$("#pp_income_currency").val();
        income_bracket.length=0;
        if(currency_income_bracket.hasOwnProperty(income_currency)){            
            income_bracket=income_bracket.concat(currency_income_bracket[income_currency]);            
        }else{
            income_bracket=income_bracket.concat(currency_income_bracket["INR (Indian Rupee)"]);
        }
        
        var income_bracket1=income_bracket.concat(['and above']);
        
        if(income_currency.length>1){
            
            $('#pp_income').tagator({autocomplete: income_bracket,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
            $('#pp_income2').tagator({autocomplete: income_bracket1,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
            //$('#income_currency').tagator({autocomplete: currency,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
            $('#pp_income').tagator('autocomplete', income_bracket);
            $('#pp_income2').tagator('autocomplete', income_bracket1);
            $('#pp_income').tagator('refresh');
            $('#pp_income2').tagator('refresh');
            $('#pp_income').prop("disabled", false);            
            $('#pp_income2').prop("disabled", false);
        }else{
            
        }
    });


    $(document).on('change', "#native_country", function (e) {
        var country=$("#native_country").val();
        currency.length=0;
        if(currency_mapping.hasOwnProperty(country)){            
            currency.push(currency_mapping[country]);            
        }else{
            currency.push(default_currency);
        }
        console.log(currency);
        //states also
        
        var state_dropdown = states[country];
        console.log(state_dropdown!==undefined && state_dropdown.length>0);
        if(state_dropdown!==undefined && state_dropdown.length>0){
        
            $('#native_state').tagator({autocomplete: state_dropdown,useDimmer: true,allowAutocompleteOnly: false,showAllOptionsOnFocus: true,maxTags:1});
            
        }
        $('#native_state').tagator('autocomplete', state_dropdown);
        $('#native_state').tagator('refresh');
        $('#native_state').prop("disabled", false);
        
        
        if(currency.length>0){
            $('#family_income_currency').tagator({autocomplete: currency,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
            $('#family_income_currency').tagator('refresh');
            $('#family_income_currency').prop("disabled", false);
        }else{
            
        }
    });


    $(document).on('change', "#family_income_currency", function (e) {
        var income_currency=$("#family_income_currency").val();
        income_bracket.length=0;
        if(currency_income_bracket.hasOwnProperty(income_currency)){            
            income_bracket=income_bracket.concat(currency_income_bracket[income_currency]);            
        }else{
            income_bracket=income_bracket.concat(currency_income_bracket["INR (Indian Rupee)"]);
        }
        
        var income_bracket1=income_bracket.concat(['and above']);
        
        if(income_currency.length>1){

            RefreshIncomeDropdown("family_income",income_bracket);
            RefreshIncomeDropdown("family_income2",income_bracket1);

            RefreshIncomeDropdown("wedding_budget",income_bracket);
            RefreshIncomeDropdown("wedding_budget2",income_bracket1);

            RefreshIncomeDropdown("net_worth",income_bracket);
        }else{
            
        }
    });

    function RefreshIncomeDropdown(income1_div,autocompletelist){
        var income1=$("#"+income1_div);
        income1.tagator({autocomplete: autocompletelist,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
        income1.tagator('autocomplete', autocompletelist);
        income1.tagator('refresh');
        income1.prop("disabled",false);
    }


    $(document).on('click', ".item", function (e) {
        
        var curitem=e.target.hash;
        
        var active_div=$("a[aria-expanded='true']");
        for(let i=0;i<active_div.length;i++){
            
            var active_href=active_div[i].hash;
            if(active_href==curitem){

            }else{
                $(active_href).attr("class","collapse");
                
                $("a[href='"+active_href+"']").attr("aria-expanded","false");
            }
        }
        
    });

    $(document).on('click','#deleteImg',function(e){
        e.preventDefault();
        var id=$(this).data("id");
        $.ajax({
            url: "/deleteImage.php",
            method: 'POST',
            data: {imgid:id},            
            dataType: 'json',            
            success: function (data1, status, xhr) {
                
                if (data1["status"] === "failure") {
                    alert(data1["message"]);
                } else {
                    loadImages();
                }
            }
        });
    });

    $(document).on('click','#upload_image',function(e){
        e.preventDefault();
        var url = "/uploadImage.php";
        var form = $("#uploadForm")[0];
        var data = new FormData(form);
        console.log(data);
        
        $.ajax({
            type: "POST",
            encType: "multipart/form-data",
            url: url,
            cache: false,
            processData: false,
            contentType: false,
            data: data,
            success: function (msg) {
                
                var status = msg.status;

                if (status === 'success') {
                    $("#img_modal").modal('hide');
                    loadImages();
                } else {
                    alert(msg.message);
                }
            },
            error: function (msg) {
                alert("Couldn't upload file");
            }
        });
    });

    
    function loadImages(){
        var id=$("#uniqueId").val();
        $.ajax({
            url: "/loadImages.php",
            method: 'POST',
            data: {pid:id},            
            dataType: 'json',            
            success: function (data1, status, xhr) {
                
                if (data1["status"] === "failure") {
                    //no data found
                } else {
                    var imgDiv=$("#imgDiv");
                    imgDiv.html('');
                    for(var i=0;i<data1.length;i++){
                        imgDiv.append('<div class="col-md-3 mt-2"><div class="card"><img class="card-img-top" src="/'+ data1[i].path +'" height=100 width=100 /><div class="card-body"><p class="card-text"><a href="#" id="deleteImg" data-id="'+ data1[i].id +'" >Delete Image</a></p></div></div></div>');
                    }
                }
            }
        });
    }

    $(document).on('click','#createprofile',function(){
        $("#profileSpinner").show();

        var url=document.URL;
        if (url.includes("toUrl=")){
            url=url.split("toUrl=")[1];
        }else{
            url="/profile/listprofile.php";
        }
        
        var array = $("#profileFrm").serializeArray();
        var json={};

        var pid=$("#uniqueId").val();
        var pid_param="";
        if(pid!==undefined){            
            pid_param="?uniqueId="+pid;            
        }
        
    
        jQuery.each(array, function() {
            json[this.name] = this.value || '';
        });

        var height=json["height"];
        var height_value=0;

        var errors=[];
        
        if (height.length>0 && height.includes("(")){
            
            height_value=height.split("(")[1];
            if (height_value.search("m")>0){
                height_value=(height_value.split("m")[0]);
            }else{
                errors.push('Please Select the Correct Height');
            }
            
        }else{
            errors.push("Invalid Height");
        }
        json["height_value"]=height_value;
        json["annual_income1_value"]=getIncome(json["annual_income1"]);
        json["annual_income2_value"]=getIncome(json["annual_income2"]);
        json["pp_income_value"]=getIncome(json["pp_income"]);
        json["pp_income2_value"]=getIncome(json["pp_income2"]);
        json["family_income_value"]=getIncome(json["family_income"]);
        json["family_income2_value"]=getIncome(json["family_income2"]);
        json["wedding_budget_value"]=getIncome(json["wedding_budget"]);
        json["wedding_budget2_value"]=getIncome(json["wedding_budget2"]);

        if (errors.length>0){
            var message='<div class="alert alert-danger">' + errors +"</div>";
            $("#profileMessage").html(message);
        }else{    
            $.ajax({
                url: "/addprofile.php"+pid_param,
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
                        window.location.href=url;
                    }
                }
            });
        }
    });
});
$(window).on('load', function() {
    // code here
    $("#country_of_residence").trigger("change");
    $("#state_of_residence").trigger("change");
    $("#income_currency").trigger("change");

    $("#native_country").trigger("change");
    $("#native_state").trigger("change");
    $("#family_income_currency").trigger("change");


   });