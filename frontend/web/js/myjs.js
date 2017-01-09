
//Rotate image by click button rotate
var angle = 0;
$('.rotate').on('click', function() {
    angle += 90;
    $('tr td').find('img').css('transform','rotate(' + angle + 'deg)');

});
//Delete image by click button delete
$('.delete').on('click', function() {

    var filename =$(this).val();
    $.ajax({
        url: "site/remove",
        type: 'GET',
        dataType: "json",
        data: {
            'filename': filename,
        },
        success: function(msg){
            alert('wow' + msg);
        }
    });

});


