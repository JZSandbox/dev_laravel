import * as $ from 'jquery';
import { random } from 'lodash';
/** Dashboard **/

let config = {
    debug : {
        notification : false,
    }
}

/**
 * @description All functions/events for Projects
 */

$(document).on("click", ".openmodal", function(){
    $("input").each(function(index,element) {
        $("input").val("")
    })
    $(".dashboard_form_label").css("color", "black")
})


$(document).on("focus", ".dashboard_form_input", function() {
    console.log($(this).parent().children(".dashboard_form_label").addClass("top"))
})

$(document).on("blur", ".dashboard_form_input", function() {
    console.log($(this).parent().children(".dashboard_form_label").removeClass("top"))
})

$(document).on("keyup", ".dashboard_form_input", function() {
    if($(this).val()) {
        $(this).parent().children(".dashboard_form_label").css("color", "transparent")
    } else {
        $(this).parent().children(".dashboard_form_label").css("color", "black")
    }
})


$(document).on("click", "#projectCreate", function(){
    let title = $("#title").val()
    let desc = $("#desc").val()
    let content = $("#content").val()
    console.log(title, desc,content)
})


$(document).on("click", "#projectTag", function(){
    let title = $(document).find("#tagtitle").val()
    let desc = $(document).find("#tagdesc").val()
    let color_value = $(document).find("#tagcolor").val()

    $.ajaxSetup({
        headers:
        { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });

    $.ajax({
        url:'/fryderykdev_cms/fryderykdev_new/public/dashboard/projects/tags',
        method: 'POST',
        data: {
            name: title,
            description: desc,
            color: color_value,
        },
        success: function(response) {
            messageHandler(response)
        },
        error: function(response) {
            messageHandler(response.responseJSON.message, 'error')
        }
    })

})



/***
 * @description Message Handler
 */

const messageHandler = (message, typ) => {
   let array = Object.values(message)
   let message_type = array[1]
   let message_content = array[0]
   let randomNumber = Math.floor(Math.random() * 1000);
   let SET_MESSAGE_LENGTH = 2000;

   let layout = `
    <div class="message ${typ ? 'error' : message_type}" id="${randomNumber}">
        ${typ ? message : message_content}
    </div>
   `
    $("#message").append(layout)

    if(!config.debug.notification) {
        setTimeout(() => {
            $("#" + randomNumber).remove()
        }, SET_MESSAGE_LENGTH)
    }
}
