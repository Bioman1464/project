jQuery(function(f){
    var element = f('#btn-up');
    f(window).scroll(function(){
        element['fade'+ (f(this).scrollTop() > 2200 ? 'In': 'Out')](1000);
    });