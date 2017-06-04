'use strict';

(function ($) {
  $('#confirm-info').on('click', function () {
    $('.layer-container').fadeIn();
  });

  $('#confirm-help').on('click', function () {
    $.ajax({
      url: '',
      type: "POST",

      data: {
        apply_id: apply_id
      },

      success: function success(data) {
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
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcGx5ZGV0YWlsLmJhYmVsLmpzIl0sIm5hbWVzIjpbIiQiLCJvbiIsImZhZGVJbiIsImFqYXgiLCJ1cmwiLCJ0eXBlIiwiZGF0YSIsImFwcGx5X2lkIiwic3VjY2VzcyIsInN0YXR1cyIsIndpbmRvdyIsImxvY2F0aW9uIiwiaHJlZiIsImZhZGVPdXQiLCJqUXVlcnkiXSwibWFwcGluZ3MiOiI7O0FBQUEsQ0FBQyxVQUFTQSxDQUFULEVBQVc7QUFDVkEsSUFBRSxlQUFGLEVBQW1CQyxFQUFuQixDQUFzQixPQUF0QixFQUE4QixZQUFXO0FBQ3ZDRCxNQUFFLGtCQUFGLEVBQXNCRSxNQUF0QjtBQUNELEdBRkQ7O0FBSUFGLElBQUUsZUFBRixFQUFtQkMsRUFBbkIsQ0FBc0IsT0FBdEIsRUFBOEIsWUFBVztBQUN2Q0QsTUFBRUcsSUFBRixDQUFPO0FBQ0xDLFdBQUssRUFEQTtBQUVMQyxZQUFNLE1BRkQ7O0FBSUxDLFlBQU07QUFDSkMsa0JBQVVBO0FBRE4sT0FKRDs7QUFRTEMsZUFBUSxpQkFBU0YsSUFBVCxFQUFlO0FBQ3JCLFlBQUlBLEtBQUtHLE1BQUwsS0FBZ0IsQ0FBcEIsRUFBdUI7QUFDckJDLGlCQUFPQyxRQUFQLENBQWdCQyxJQUFoQixHQUF1QixtQkFBdkI7QUFDRDtBQUNGO0FBWkksS0FBUDtBQWNELEdBZkQ7O0FBaUJBWixJQUFFLGNBQUYsRUFBa0JDLEVBQWxCLENBQXFCLE9BQXJCLEVBQTZCLFlBQVc7QUFDdENELE1BQUUsa0JBQUYsRUFBc0JhLE9BQXRCO0FBQ0QsR0FGRDtBQUdELENBekJELEVBeUJHQyxNQXpCSCIsImZpbGUiOiJhcHBseWRldGFpbC5iYWJlbC5qcyIsInNvdXJjZXNDb250ZW50IjpbIihmdW5jdGlvbigkKXtcclxuICAkKCcjY29uZmlybS1pbmZvJykub24oJ2NsaWNrJyxmdW5jdGlvbigpIHtcclxuICAgICQoJy5sYXllci1jb250YWluZXInKS5mYWRlSW4oKVxyXG4gIH0pXHJcblxyXG4gICQoJyNjb25maXJtLWhlbHAnKS5vbignY2xpY2snLGZ1bmN0aW9uKCkge1xyXG4gICAgJC5hamF4KHtcclxuICAgICAgdXJsOiAnJyxcclxuICAgICAgdHlwZTogXCJQT1NUXCIsXHJcblxyXG4gICAgICBkYXRhOiB7XHJcbiAgICAgICAgYXBwbHlfaWQ6IGFwcGx5X2lkXHJcbiAgICAgIH0sXHJcblxyXG4gICAgICBzdWNjZXNzOmZ1bmN0aW9uKGRhdGEpIHtcclxuICAgICAgICBpZiAoZGF0YS5zdGF0dXMgPT09IDEpIHtcclxuICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy9ob21lL2hlbHBoaXN0b3J5J1xyXG4gICAgICAgIH1cclxuICAgICAgfVxyXG4gICAgfSlcclxuICB9KVxyXG5cclxuICAkKCcjY2FuY2xlLWhlbHAnKS5vbignY2xpY2snLGZ1bmN0aW9uKCkge1xyXG4gICAgJCgnLmxheWVyLWNvbnRhaW5lcicpLmZhZGVPdXQoKVxyXG4gIH0pXHJcbn0pKGpRdWVyeSkiXX0=
