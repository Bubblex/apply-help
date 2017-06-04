'use strict';

(function ($) {
  $('.myinfo-container').find('input').hide();
  $('#confirm-change').hide();

  $('#change-myinfo').on('click', function () {
    $('.show ').hide();
    $('input').show();
    $(this).hide();
    $('#confirm-change').show();
  });

  $('#confirm-change').on('click', function () {
    $.ajax({
      url: '',
      type: "POST",

      data: {
        apply_id: apply_id
      },

      success: function success(data) {
        if (data.status === 1) {
          window.location.href = '/home/myinfo';
        }
      }
    });
  });
})(jQuery);
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm15aW5mby5iYWJlbC5qcyJdLCJuYW1lcyI6WyIkIiwiZmluZCIsImhpZGUiLCJvbiIsInNob3ciLCJhamF4IiwidXJsIiwidHlwZSIsImRhdGEiLCJhcHBseV9pZCIsInN1Y2Nlc3MiLCJzdGF0dXMiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsImhyZWYiLCJqUXVlcnkiXSwibWFwcGluZ3MiOiI7O0FBQUEsQ0FBQyxVQUFTQSxDQUFULEVBQVc7QUFDVkEsSUFBRSxtQkFBRixFQUF1QkMsSUFBdkIsQ0FBNEIsT0FBNUIsRUFBcUNDLElBQXJDO0FBQ0FGLElBQUUsaUJBQUYsRUFBcUJFLElBQXJCOztBQUVBRixJQUFFLGdCQUFGLEVBQW9CRyxFQUFwQixDQUF1QixPQUF2QixFQUErQixZQUFXO0FBQ3hDSCxNQUFFLFFBQUYsRUFBWUUsSUFBWjtBQUNBRixNQUFFLE9BQUYsRUFBV0ksSUFBWDtBQUNBSixNQUFFLElBQUYsRUFBUUUsSUFBUjtBQUNBRixNQUFFLGlCQUFGLEVBQXFCSSxJQUFyQjtBQUNELEdBTEQ7O0FBT0FKLElBQUUsaUJBQUYsRUFBcUJHLEVBQXJCLENBQXdCLE9BQXhCLEVBQWdDLFlBQVc7QUFDekNILE1BQUVLLElBQUYsQ0FBTztBQUNMQyxXQUFLLEVBREE7QUFFTEMsWUFBTSxNQUZEOztBQUlMQyxZQUFNO0FBQ0pDLGtCQUFVQTtBQUROLE9BSkQ7O0FBUUxDLGVBQVEsaUJBQVNGLElBQVQsRUFBZTtBQUNyQixZQUFJQSxLQUFLRyxNQUFMLEtBQWdCLENBQXBCLEVBQXVCO0FBQ3JCQyxpQkFBT0MsUUFBUCxDQUFnQkMsSUFBaEIsR0FBdUIsY0FBdkI7QUFDRDtBQUNGO0FBWkksS0FBUDtBQWNELEdBZkQ7QUFnQkQsQ0EzQkQsRUEyQkdDLE1BM0JIIiwiZmlsZSI6Im15aW5mby5iYWJlbC5qcyIsInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbigkKXtcclxuICAkKCcubXlpbmZvLWNvbnRhaW5lcicpLmZpbmQoJ2lucHV0JykuaGlkZSgpXHJcbiAgJCgnI2NvbmZpcm0tY2hhbmdlJykuaGlkZSgpXHJcbiAgXHJcbiAgJCgnI2NoYW5nZS1teWluZm8nKS5vbignY2xpY2snLGZ1bmN0aW9uKCkge1xyXG4gICAgJCgnLnNob3cgJykuaGlkZSgpXHJcbiAgICAkKCdpbnB1dCcpLnNob3coKVxyXG4gICAgJCh0aGlzKS5oaWRlKClcclxuICAgICQoJyNjb25maXJtLWNoYW5nZScpLnNob3coKVxyXG4gIH0pXHJcblxyXG4gICQoJyNjb25maXJtLWNoYW5nZScpLm9uKCdjbGljaycsZnVuY3Rpb24oKSB7XHJcbiAgICAkLmFqYXgoe1xyXG4gICAgICB1cmw6ICcnLFxyXG4gICAgICB0eXBlOiBcIlBPU1RcIixcclxuXHJcbiAgICAgIGRhdGE6IHtcclxuICAgICAgICBhcHBseV9pZDogYXBwbHlfaWRcclxuICAgICAgfSxcclxuXHJcbiAgICAgIHN1Y2Nlc3M6ZnVuY3Rpb24oZGF0YSkge1xyXG4gICAgICAgIGlmIChkYXRhLnN0YXR1cyA9PT0gMSkge1xyXG4gICAgICAgICAgd2luZG93LmxvY2F0aW9uLmhyZWYgPSAnL2hvbWUvbXlpbmZvJ1xyXG4gICAgICAgIH1cclxuICAgICAgfVxyXG4gICAgfSlcclxuICB9KVxyXG59KShqUXVlcnkpIl19
