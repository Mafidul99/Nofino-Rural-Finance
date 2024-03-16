if ($("#loan-eligibility").length) {

	jQuery( function( $ ) {

            $ = jQuery;

            $("#pricipal-slide").slider({
                range: "min",
                min: 10000,
                max: 9000000,
                value: 900000,
                step: 100,
                slide: function(event, ui) {
                    $("#pricipal").text(ui.value);
                    pyloan_eligibility();
                }
            });
            $("#pricipal").text($("#pricipal-slide").slider("value"));

           $("#income-slide").slider({
                range: "min",
                min: 100,
                max: 1000000,
                value: 30000,
                step: 1,
                slide: function(event, ui) {
                    $("#income").text(ui.value);
                    pyloan_eligibility();
                }
            });
            $("#income").text($("#income-slide").slider("value"));


            $("#totalyear-slide").slider({
                range: "min",
                min: 1,
                max: 32,
                step: 1,
                value: 10,
                slide: function(event, ui) {
                    $("#totalyear").text(ui.value);
                    pyloan_eligibility();
                }
            });
            $("#totalyear").text($("#totalyear-slide").slider("value"));

            $("#intrest-slide").slider({
                range: "min",
                min: 4.10,
                max: 16.20,
                step: 0.01,
                value: 10,
                slide: function(event, ui) {
                    $("#intrest").text(ui.value);
                    pyloan_eligibility();
                }
            });

            $("#intrest").text($("#intrest-slide").slider("value"));

            $("#other-emi-slide").slider({
                range: "min",
                min: 0,
                max: 5000000,
                step: 1,
                value: 0,
                slide: function(event, ui) {
                    $("#other-emi").text(ui.value);
                    pyloan_eligibility();
                }
            });
            
            $("#other-emi").text($("#other-emi-slide").slider("value"));            

            pyloan_eligibility();
         });


         function pyloan_eligibility() {


            var P1 =jQuery("#pricipal").text();
            var n1 =jQuery("#totalyear").text();
            var rate1=jQuery("#intrest").text();
            var existing = jQuery("#other-emi").text();

            var income1 =jQuery("#income").text();


             var r1 = rate1 / (12 * 100); // to calculate rate percentage..
             var prate1 = (P1 * r1 * Math.pow((1 + r1), n1 * 12)) / (Math.pow((1 + r1), n1 * 12) - 1); // to calculate compound interest..
             var emi1 = Math.ceil(prate1 * 100) / 100; // to parse emi amount..
             var existingLoan = (existing - (existing * 60 / 100));

             if (income1 <= 14999) {
                 var incomere = ((income1) * 40 / 100) - existingLoan;
             } else if (income1 <= 29999) {
                 var incomere = ((income1) * 45 / 100) - existingLoan;
             } else if (income1 >= 30000) {
                 var incomere = ((income1) * 50 / 100) - existingLoan;
             }
             var incomereq = Math.floor(incomere / emi1 * P1);
             var prate2 = (incomereq * r1 * Math.pow((1 + r1), n1 * 12)) / (Math.pow((1 + r1), n1 * 12) - 1); // to calculate compound interest2..
             var emi2 = Math.ceil((prate2) * 100) / 100; // to parse emi2 amount..   //Check again Reminder
             // to assign value in field1 as fixed upto two decimal..
             if (incomereq > P1) {
                jQuery("#loan-eligibility-monthly").html(emi1.toFixed(0));                
                jQuery("#loan-eligibility-maximum-total").html(incomereq);
                jQuery("#loan-eligibility-maximum-emi").html('/ '+emi2.toFixed(0)+'&nbsp;EMI');    
             } else { 
                jQuery("#loan-eligibility-monthly").html('0');
                jQuery("#loan-eligibility-maximum-total").html('0');
                jQuery("#loan-eligibility-maximum-emi").html('')
             }

         }
}