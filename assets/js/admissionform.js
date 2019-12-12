
$(document).ready(function(){

    $('#btn_basic_information').click(function(){

        $('#list_basic_information').removeClass('active active_tab1');
        $('#list_basic_information').removeAttr('href data-toggle');
        $('#basic_information').removeClass('active');
        // $('#basic_information').addClass('fade');
        $('#list_basic_information').addClass('inactive_tab1');
        $('#list_personal_information').removeClass('inactive_tab1');
        $('#list_personal_information').addClass('active_tab1 active');
        $('#list_personal_information').attr('href', '#personal_information');
        $('#list_personal_information').attr('data-toggle', 'tab');
        $('#personal_information').removeClass(' fade ');
        $('#personal_information').addClass('active');


    })

    $('#btn_personal_information_prev').click(function(){

        $('#list_basic_information').addClass('active active_tab1');
        // $('#list_basic_information').removeAttr('href data-toggle');
        $('#basic_information').addClass('active');
        $('#basic_information').removeClass('fade');
        $('#list_basic_information').addClass('active_tab1');
        $('#list_personal_information').addClass('inactive_tab1');
        $('#list_personal_information').removeClass('active_tab1 active');
        $('#list_personal_information').attr('href', '#basic_information');
        $('#list_personal_information').attr('data-toggle', 'tab');
        $('#personal_information').addClass(' fade ');
        $('#personal_information').removeClass('active');

    })

    $('#btn_personal_information_nxt').click(function(){
        $('#list_personal_information').removeClass('active active_tab1');
        $('#list_personal_information').removeAttr('href data-toggle');
        $('#list_personal_information').addClass('inactive_tab1');
        $('#personal_information').addClass('fade');
        $('#personal_information').removeClass('active');

        $('#list_education_information').removeClass('inactive_tab1');
        $('#list_education_information').addClass('active active_tab1');
        $('#list_education_information').attr('href', '#pervious_eduction_info');
        $('#list_education_information').attr('data-toggle', 'tab');
        $('#pervious_eduction_info').removeClass('fade');
        $('#pervious_eduction_info').addClass('active in');
    })


    $('#btn_eduction_prev').click(function(){
        $('#list_church_information').addClass('active active_tab1');
        $('#list_church_information').removeAttr('href data-toggle');
        $('#list_eduction_information').addClass('inactive_tab1');
        $('#personal_information').removeClass('fade');
        $('#personal_information').addClass('active');

        $('#list_education_information').addClass('inactive_tab1');
        // $('#list_education_information').addClass('active active_tab1');
        // $('#list_education_information').attr('href', '#pervious_eduction_info');
        // $('#list_education_information').attr('data-toggle', 'tab');
        $('#pervious_eduction_info').addClass('fade');
        $('#pervious_eduction_info').removeClass('active');
    })



    $('#btn_eduction_next').click(function(){
        $('#list_education_information').removeClass('active active_tab1');
        $('#list_education_information').removeAttr('href data-toggle');
        $('#list_education_information').addClass('inactive_tab1');

        $('#list_church_information').removeClass('inactive_tab1');
        $('#list_church_information').addClass('active active_tab1');
        $('#church_details').removeClass('fade');
        $('#church_details').addClass('active');

        // $('#list_education_information').addClass('inactive_tab1');
        // $('#list_education_information').addClass('active active_tab1');
        // $('#list_education_information').attr('href', '#pervious_eduction_info');
        // $('#list_education_information').attr('data-toggle', 'tab');
        $('#pervious_eduction_info').addClass('fade');
        $('#pervious_eduction_info').removeClass('active');
    })

    $('#btn_church_prev').click(function(){
        $('#list_church_information').removeClass('active_tab1');
        $('#list_church_information').addClass('inactive_tab1');
        $('#church_details').addClass('fade');
        $('#church_details').removeClass('active');

        $('#list_education_information').removeClass('inactive_tab1');
        $('#list_education_information').addClass('active active_tab1');
        $('#pervious_eduction_info').removeClass('fade');
        $('#pervious_eduction_info').addClass('active in');
    })
    $('#btn_church_next').click(function(){
        $('#list_parent_information').removeClass('inactive_tab1');
        $('#list_parent_information').addClass('active_tab1');

        $('#parent_information').removeClass('fade');
        $('#parent_information').addClass('active');

        $('#list_church_information').removeClass('active_tab1');
        $('#list_church_information').addClass('inactive_tab1');
        $('#church_details').addClass('fade');
        $('#church_details').removeClass('active');

        


    })
})