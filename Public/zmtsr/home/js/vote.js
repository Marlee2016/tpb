$(function () {
   $('.do-vote').children('button').click(function () {
       var url = $(this).data('url');
       var arId = $(this).data('no');
       var auId = $(this).data('au');
       $.ajax({
           type: 'POST',
           url: url,
           data: {
               arId: arId,
               auId: auId
           },
           success: function (msg) {
               if (msg.info == '点赞成功！') {
                   for(var i=0; i<$('.vote_num').length; i++) {
                       if ($($('.vote_num')[i]).data('id') == msg.id) {
                           $($('.vote_num')[i]).text(parseInt($($('.vote_num')[i]).text())+1);
                       }
                   }
               }
               alert(msg.info);
           }
       });
   });
});