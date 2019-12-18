$(document).ready(function(){
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
            var activeTab = $(e.target).text(); // Get the name of active tab
            var previousTab = $(e.relatedTarget).text(); // Get the name of previous tab
            $(".active-tab span").html(activeTab);
            $(".previous-tab span").html(previousTab);
        });
    });