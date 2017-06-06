'use strict';

(function ($) {

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

  $('.cancel-apply').on('click', function() {
    $.ajax({
      url: '/home/cancel/apply',
      type: 'post',
      data: $(this).data(),
      success: function(data) {
        if (data.status === 1) {
          window.location.reload()
        }
      }
    })
  })

})(jQuery);
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcGx5aGlzdG9yeS5iYWJlbC5qcyJdLCJuYW1lcyI6WyIkIiwiY291bnQiLCJwYXJzZUludCIsInZhbCIsInBhZ2UiLCJwYWdlQ291bnQiLCJvcHRzIiwiY3VycmVudF9wYWdlIiwiaXRlbXNfcGVyX3BhZ2UiLCJwYWdpbmF0aW9uIiwialF1ZXJ5Il0sIm1hcHBpbmdzIjoiOztBQUNBLENBQUMsVUFBU0EsQ0FBVCxFQUFXOztBQUVWO0FBQ0EsTUFBTUMsUUFBU0MsU0FBU0YsRUFBRSxhQUFGLEVBQWlCRyxHQUFqQixFQUFULENBQWY7QUFDQSxNQUFNQyxPQUFPRixTQUFTRixFQUFFLE9BQUYsRUFBV0csR0FBWCxFQUFULElBQTJCLENBQXhDO0FBQ0EsTUFBTUUsWUFBWUgsU0FBU0YsRUFBRSxZQUFGLEVBQWdCRyxHQUFoQixFQUFULENBQWxCO0FBQ0EsTUFBTUcsT0FBTztBQUNUQyxrQkFBYUgsSUFESjtBQUVUSSxvQkFBZUg7QUFGTixHQUFiOztBQUtBO0FBQ0FMLElBQUUsZ0JBQUYsRUFBb0JTLFVBQXBCLENBQStCUixLQUEvQixFQUFxQ0ssSUFBckM7QUFDRCxDQWJELEVBYUdJLE1BYkgiLCJmaWxlIjoiYXBwbHloaXN0b3J5LmJhYmVsLmpzIiwic291cmNlc0NvbnRlbnQiOlsiXHJcbihmdW5jdGlvbigkKXtcclxuXHJcbiAgLy8g5Yid5aeL5YyW5YiG6aG1XHJcbiAgY29uc3QgY291bnQgPSAgcGFyc2VJbnQoJCgnI3RvdGFsQ291bnQnKS52YWwoKSkgO1xyXG4gIGNvbnN0IHBhZ2UgPSBwYXJzZUludCgkKCcjcGFnZScpLnZhbCgpKS0xO1xyXG4gIGNvbnN0IHBhZ2VDb3VudCA9IHBhcnNlSW50KCQoJyNwYWdlQ291bnQnKS52YWwoKSlcclxuICBjb25zdCBvcHRzID0ge1xyXG4gICAgICBjdXJyZW50X3BhZ2U6cGFnZSxcclxuICAgICAgaXRlbXNfcGVyX3BhZ2U6cGFnZUNvdW50XHJcbiAgfVxyXG5cclxuICAvL+S8oOWFpeaAu+adoeaVsFxyXG4gICQoXCIjd2ViUGFnaW5hdGlvblwiKS5wYWdpbmF0aW9uKGNvdW50LG9wdHMpXHJcbn0pKGpRdWVyeSk7XHJcblxyXG5cclxuIl19
