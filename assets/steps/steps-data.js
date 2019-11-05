/**
 *  Document   : steps-data.js
 *  Author     : redstar
 *  Description: script for wizard
 *
 **/
"use strict";
var wizard = $("#wizard").steps();
 


var form = $("#employee-form").show();

form.steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex)
        {
            return true;
        }
        
        // Needed in some cases if the user went back (clean up)
        if (currentIndex < newIndex)
        {
            // To remove error styles
            form.find(".body:eq(" + newIndex + ") label.error").remove();
            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
        }
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onStepChanged: function (event, currentIndex, priorIndex)
    {
        // Used to skip the "Warning" step if the user is old enough.
        if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
        {
            form.steps("next");
        }
        // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
        if (currentIndex === 2 && priorIndex === 3)
        {
            form.steps("previous");
        }
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        var data = $('#employee-form').serialize() + '&submit=employee';
        $.post($('#employee-form').attr('action'),data,function(d,r){

            if (r !== 'success') {
                //error server
                alert('Server Error');
               
            }
            if (d.trim() === '0') {
                // form couldn't be submitted
                 alert("Employee form added couldn't be submitted!");
            }
            else if (d.trim() === '1')
            {
                // successful submit
                alert("Employee added successfully!");
                window.location.reload();
            }

        }).error(function(){
             //error server
            alert('Server Error');
        });

    }
}).validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password-2"
        }
    }
});

$("#example-vertical").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    stepsOrientation: "vertical"
});
