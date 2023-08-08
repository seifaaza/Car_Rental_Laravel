import "./bootstrap";

let edit = $(".edit");
let review = $(".review");
let modify = $('.modify');
let reviewContent = $('.reviewContent');
$(document).ready(function() {
    edit.click(function() {
        let this_edit = $(this);
        let this_modify = $(this).parent().parent().find(modify);
        let this_review = $(this).parent().parent().find(review);

        this_review.addClass('form-control').prop("disabled", false).focus();

        if (this_review.val().length == 0) {
            this_modify.addClass('visibility-hidden');
      }

        review.not(this_review).removeClass('form-control').prop("disabled",true);

        this_modify.css('display','inline');
        modify.not(this_modify).css('display','none');

        this_edit.css('display','none');
        edit.not(this_edit).css('display','inline');



    });
    // review.focus(function(){
    //     let this_edit = $(this);
    //     let this_modify = $(this).parent().parent().find(modify);
    //     let this_review = $(this).parent().parent().find(review);
    //     if (this_review.val().length == 0) {
    //         this_modify.addClass('visibility-hidden');
    //   }
    // })

});
