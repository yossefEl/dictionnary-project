$(document).ready(function () {
    $("#search-text").keyup(function () {

            var keyword = $(this).val();
            if (keyword != '') {
                $.ajax({
                    url: 'search.php',
                    data: {
                        keywrd: keyword
                    },
                    type: 'POST',
                    success: function (data) {
                        $("#search-results").html(data);
                    }
                });
            } else {
                $("#search-results").html("<span class='text-info text-left'>Waiting for you :)</span>");
            }
        }

    );//end of #search
        
    // $("#nav-search").click(function (e) { 
    //     e.preventDefault();
    //     $(".search-container").toggle();
    // });
    // // show all data 
    // $("#nav-all").click(function (e) { 
    //     e.preventDefault();
    //     $.ajax({
    //         type: "POST",
    //         url: "show_word.php",
    //         success: function (response) {
    //             $(".search-container").html(response);
    //         }
    //     });
    // });


});//end of document.ready();