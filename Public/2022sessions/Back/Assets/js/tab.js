$(function() {
    $('#zqgs').click(function() {
        $(this).addClass('active');
        $('.tab-head li[id!=zqgs]').each(function() {
            $(this).removeClass('active');
        });
        $('#zqgs-con').css('display', 'block');
        $('.tab-con li[id!=zqgs-con]').each(function() {
            $(this).css('display', 'none');
        });
        $.get($('input[name=hidden]').val(), {cat:'zqgs'}, function(res) {
            if (res) {
                alert(res);
            }
        })
    });

    $('#gjcp').click(function() {
        $(this).addClass('active');
        $('.tab-head li[id!=gjcp]').each(function() {
            $(this).removeClass('active');
        });
        $('#gjcp-con').css('display', 'block');
        $('.tab-con li[id!=gjcp-con]').each(function() {
            $(this).css('display', 'none');
        });
    });

    $('#sj').click(function() {
        $(this).addClass('active');
        $('.tab-head li[id!=sj]').each(function() {
            $(this).removeClass('active');
        });
        $('#sj-con').css('display', 'block');
        $('.tab-con li[id!=sj-con]').each(function() {
            $(this).css('display', 'none');
        });
    });

    $('#xy').click(function() {
        $(this).addClass('active');
        $('.tab-head li[id!=xy]').each(function() {
            $(this).removeClass('active');
        });
        $('#xy-con').css('display', 'block');
        $('.tab-con li[id!=xy-con]').each(function() {
            $(this).css('display', 'none');
        });
    });

    $('#bxht').click(function() {
        $(this).addClass('active');
        $('.tab-head li[id!=bxht]').each(function() {
            $(this).removeClass('active');
        });
        $('#bxht-con').css('display', 'block');
        $('.tab-con li[id!=bxht-con]').each(function() {
            $(this).css('display', 'none');
        });
    });
});