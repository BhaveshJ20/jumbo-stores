$(window).on("load", function() {
    $(".preloader").hide();    
});

function openTips(tipsName){
    var previousTipDisplay = $("#currentTipDisplay").val();
    $("#main-tip-section").hide();
    if(previousTipDisplay != tipsName && previousTipDisplay != ''){        
        $("#"+previousTipDisplay).hide();
        $("#"+tipsName).show();        
    }else{        
        $("#"+tipsName).show();
    } 
    $("#currentTipDisplay").val(tipsName);
}

function goBackTips(){
    var previousTipDisplay = $("#currentTipDisplay").val();
    $("#main-tip-section").show();
    $("#"+previousTipDisplay).hide();    
}