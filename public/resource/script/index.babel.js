"use strict";

// 数字滚动效果
(function ($) {
    $.fn.numberRock = function (options) {
        var defaults = {
            speed: 24,
            count: 100
        };
        var opts = $.extend({}, defaults, options);

        var div_by = 100,
            count = opts["count"],
            speed = Math.floor(count / div_by),
            sum = 0,
            $display = this,
            run_count = 1,
            int_speed = opts["speed"];
        var int = setInterval(function () {
            if (run_count <= div_by && speed != 0) {
                $display.text(sum = speed * run_count);
                run_count++;
            } else if (sum < count) {
                $display.text(++sum);
            } else {
                clearInterval(int);
            }
        }, int_speed);
    };
})(jQuery);

(function ($) {

    // 初始化数字滚动
    var thing_account = $(".account-thing").text();
    var people_account = $(".account-people").text();

    $(".account-thing").numberRock({
        speed: 10,
        count: parseInt(thing_account)
    });
    $(".account-people").numberRock({
        speed: 10,
        count: parseInt(people_account)
    });

    // 初始化分页
    var count = parseInt($('#totalCount').val());
    var page = parseInt($('#page').val()) - 1;
    var pageCount = parseInt($('#pageCount').val());
    var opts = {
        current_page: page,
        items_per_page: pageCount
    };

    //传入总条数
    $("#webPagination").pagination(count, opts);
})(jQuery);

(function ($) {
  $('.help-btn').on('click', function () {
    $('input[name="id"]').val($(this).attr('data-id'))
    $('.explain-needed').text($(this).attr('data-needed'))
    $('.layer-container').fadeIn();
  });

  $('#confirm-help').on('click', function () {
    $.ajax({
      url: '/home/confirm/donate',
      type: 'post',
      data: {
        id: $('input[name="id"]').val()
      },
      success: function success(data) {
        alert(data.message)

        if (data.status === 1) {
          window.location.href = '/home/helphistory';
        }
      }
    });
  });

  $('#cancle-help').on('click', function () {
    $('.layer-container').fadeOut();
  });
})(jQuery);
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImluZGV4LmJhYmVsLmpzIl0sIm5hbWVzIjpbIiQiLCJmbiIsIm51bWJlclJvY2siLCJvcHRpb25zIiwiZGVmYXVsdHMiLCJzcGVlZCIsImNvdW50Iiwib3B0cyIsImV4dGVuZCIsImRpdl9ieSIsIk1hdGgiLCJmbG9vciIsInN1bSIsIiRkaXNwbGF5IiwicnVuX2NvdW50IiwiaW50X3NwZWVkIiwiaW50Iiwic2V0SW50ZXJ2YWwiLCJ0ZXh0IiwiY2xlYXJJbnRlcnZhbCIsImpRdWVyeSIsInRoaW5nX2FjY291bnQiLCJwZW9wbGVfYWNjb3VudCIsInBhcnNlSW50IiwidmFsIiwicGFnZSIsInBhZ2VDb3VudCIsImN1cnJlbnRfcGFnZSIsIml0ZW1zX3Blcl9wYWdlIiwicGFnaW5hdGlvbiJdLCJtYXBwaW5ncyI6Ijs7QUFBQTtBQUNBLENBQUMsVUFBU0EsQ0FBVCxFQUFXO0FBQ1JBLE1BQUVDLEVBQUYsQ0FBS0MsVUFBTCxHQUFnQixVQUFTQyxPQUFULEVBQWlCO0FBQzdCLFlBQUlDLFdBQVM7QUFDVEMsbUJBQU0sRUFERztBQUVUQyxtQkFBTTtBQUZHLFNBQWI7QUFJQSxZQUFJQyxPQUFLUCxFQUFFUSxNQUFGLENBQVMsRUFBVCxFQUFhSixRQUFiLEVBQXVCRCxPQUF2QixDQUFUOztBQUVBLFlBQUlNLFNBQVMsR0FBYjtBQUFBLFlBQ0FILFFBQU1DLEtBQUssT0FBTCxDQUROO0FBQUEsWUFFQUYsUUFBUUssS0FBS0MsS0FBTCxDQUFXTCxRQUFRRyxNQUFuQixDQUZSO0FBQUEsWUFHQUcsTUFBSSxDQUhKO0FBQUEsWUFJQUMsV0FBVyxJQUpYO0FBQUEsWUFLQUMsWUFBWSxDQUxaO0FBQUEsWUFNQUMsWUFBWVIsS0FBSyxPQUFMLENBTlo7QUFPQSxZQUFJUyxNQUFNQyxZQUFZLFlBQVk7QUFDOUIsZ0JBQUlILGFBQWFMLE1BQWIsSUFBcUJKLFNBQU8sQ0FBaEMsRUFBbUM7QUFDL0JRLHlCQUFTSyxJQUFULENBQWNOLE1BQUlQLFFBQVFTLFNBQTFCO0FBQ0FBO0FBQ0gsYUFIRCxNQUdPLElBQUlGLE1BQU1OLEtBQVYsRUFBaUI7QUFDcEJPLHlCQUFTSyxJQUFULENBQWMsRUFBRU4sR0FBaEI7QUFDSCxhQUZNLE1BRUE7QUFDSE8sOEJBQWNILEdBQWQ7QUFDSDtBQUNKLFNBVFMsRUFTUEQsU0FUTyxDQUFWO0FBVUgsS0F4QkQ7QUEwQkgsQ0EzQkQsRUEyQkdLLE1BM0JIOztBQStCQSxDQUFDLFVBQVNwQixDQUFULEVBQVc7O0FBRVY7QUFDQSxRQUFNcUIsZ0JBQWdCckIsRUFBRSxnQkFBRixFQUFvQmtCLElBQXBCLEVBQXRCO0FBQ0EsUUFBTUksaUJBQWlCdEIsRUFBRSxpQkFBRixFQUFxQmtCLElBQXJCLEVBQXZCOztBQUVBbEIsTUFBRSxnQkFBRixFQUFvQkUsVUFBcEIsQ0FBK0I7QUFDN0JHLGVBQU8sRUFEc0I7QUFFN0JDLGVBQU9pQixTQUFTRixhQUFUO0FBRnNCLEtBQS9CO0FBSUFyQixNQUFFLGlCQUFGLEVBQXFCRSxVQUFyQixDQUFnQztBQUM5QkcsZUFBTyxFQUR1QjtBQUU5QkMsZUFBT2lCLFNBQVNELGNBQVQ7QUFGdUIsS0FBaEM7O0FBTUE7QUFDQSxRQUFNaEIsUUFBU2lCLFNBQVN2QixFQUFFLGFBQUYsRUFBaUJ3QixHQUFqQixFQUFULENBQWY7QUFDQSxRQUFNQyxPQUFPRixTQUFTdkIsRUFBRSxPQUFGLEVBQVd3QixHQUFYLEVBQVQsSUFBMkIsQ0FBeEM7QUFDQSxRQUFNRSxZQUFZSCxTQUFTdkIsRUFBRSxZQUFGLEVBQWdCd0IsR0FBaEIsRUFBVCxDQUFsQjtBQUNBLFFBQU1qQixPQUFPO0FBQ1RvQixzQkFBYUYsSUFESjtBQUVURyx3QkFBZUY7QUFGTixLQUFiOztBQUtBO0FBQ0ExQixNQUFFLGdCQUFGLEVBQW9CNkIsVUFBcEIsQ0FBK0J2QixLQUEvQixFQUFxQ0MsSUFBckM7QUFDRCxDQTNCRCxFQTJCR2EsTUEzQkgiLCJmaWxlIjoiaW5kZXguYmFiZWwuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyDmlbDlrZfmu5rliqjmlYjmnpxcclxuKGZ1bmN0aW9uKCQpe1xyXG4gICAgJC5mbi5udW1iZXJSb2NrPWZ1bmN0aW9uKG9wdGlvbnMpe1xyXG4gICAgICAgIHZhciBkZWZhdWx0cz17XHJcbiAgICAgICAgICAgIHNwZWVkOjI0LFxyXG4gICAgICAgICAgICBjb3VudDoxMDBcclxuICAgICAgICB9O1xyXG4gICAgICAgIHZhciBvcHRzPSQuZXh0ZW5kKHt9LCBkZWZhdWx0cywgb3B0aW9ucyk7XHJcblxyXG4gICAgICAgIHZhciBkaXZfYnkgPSAxMDAsXHJcbiAgICAgICAgY291bnQ9b3B0c1tcImNvdW50XCJdLFxyXG4gICAgICAgIHNwZWVkID0gTWF0aC5mbG9vcihjb3VudCAvIGRpdl9ieSksXHJcbiAgICAgICAgc3VtPTAsXHJcbiAgICAgICAgJGRpc3BsYXkgPSB0aGlzLFxyXG4gICAgICAgIHJ1bl9jb3VudCA9IDEsXHJcbiAgICAgICAgaW50X3NwZWVkID0gb3B0c1tcInNwZWVkXCJdO1xyXG4gICAgICAgIHZhciBpbnQgPSBzZXRJbnRlcnZhbChmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIGlmIChydW5fY291bnQgPD0gZGl2X2J5JiZzcGVlZCE9MCkge1xyXG4gICAgICAgICAgICAgICAgJGRpc3BsYXkudGV4dChzdW09c3BlZWQgKiBydW5fY291bnQpO1xyXG4gICAgICAgICAgICAgICAgcnVuX2NvdW50Kys7XHJcbiAgICAgICAgICAgIH0gZWxzZSBpZiAoc3VtIDwgY291bnQpIHtcclxuICAgICAgICAgICAgICAgICRkaXNwbGF5LnRleHQoKytzdW0pO1xyXG4gICAgICAgICAgICB9IGVsc2Uge1xyXG4gICAgICAgICAgICAgICAgY2xlYXJJbnRlcnZhbChpbnQpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSwgaW50X3NwZWVkKTtcclxuICAgIH1cclxuXHJcbn0pKGpRdWVyeSk7XHJcblxyXG5cclxuXHJcbihmdW5jdGlvbigkKXtcclxuXHJcbiAgLy8g5Yid5aeL5YyW5pWw5a2X5rua5YqoXHJcbiAgY29uc3QgdGhpbmdfYWNjb3VudCA9ICQoXCIuYWNjb3VudC10aGluZ1wiKS50ZXh0KClcclxuICBjb25zdCBwZW9wbGVfYWNjb3VudCA9ICQoXCIuYWNjb3VudC1wZW9wbGVcIikudGV4dCgpXHJcblxyXG4gICQoXCIuYWNjb3VudC10aGluZ1wiKS5udW1iZXJSb2NrKHtcclxuICAgIHNwZWVkOiAxMCxcclxuICAgIGNvdW50OiBwYXJzZUludCh0aGluZ19hY2NvdW50KVxyXG4gIH0pXHJcbiAgJChcIi5hY2NvdW50LXBlb3BsZVwiKS5udW1iZXJSb2NrKHtcclxuICAgIHNwZWVkOiAxMCxcclxuICAgIGNvdW50OiBwYXJzZUludChwZW9wbGVfYWNjb3VudClcclxuICB9KVxyXG5cclxuXHJcbiAgLy8g5Yid5aeL5YyW5YiG6aG1XHJcbiAgY29uc3QgY291bnQgPSAgcGFyc2VJbnQoJCgnI3RvdGFsQ291bnQnKS52YWwoKSkgO1xyXG4gIGNvbnN0IHBhZ2UgPSBwYXJzZUludCgkKCcjcGFnZScpLnZhbCgpKS0xO1xyXG4gIGNvbnN0IHBhZ2VDb3VudCA9IHBhcnNlSW50KCQoJyNwYWdlQ291bnQnKS52YWwoKSlcclxuICBjb25zdCBvcHRzID0ge1xyXG4gICAgICBjdXJyZW50X3BhZ2U6cGFnZSxcclxuICAgICAgaXRlbXNfcGVyX3BhZ2U6cGFnZUNvdW50XHJcbiAgfVxyXG5cclxuICAvL+S8oOWFpeaAu+adoeaVsFxyXG4gICQoXCIjd2ViUGFnaW5hdGlvblwiKS5wYWdpbmF0aW9uKGNvdW50LG9wdHMpXHJcbn0pKGpRdWVyeSk7XHJcblxyXG5cclxuIl19
