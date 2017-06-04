'use strict';

(function ($) {

  $('.header-search').on('click', function () {

    var keyword = $('.header-input').val();

    if (keyword === '') {
      alert('请输入搜索内容');
      return;
    } else {
      window.location.href = '/search';
    }
  });
})(jQuery);
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5iYWJlbC5qcyJdLCJuYW1lcyI6WyIkIiwib24iLCJrZXl3b3JkIiwidmFsIiwiYWxlcnQiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsImhyZWYiLCJqUXVlcnkiXSwibWFwcGluZ3MiOiI7O0FBQUEsQ0FBQyxVQUFTQSxDQUFULEVBQVc7O0FBRVZBLElBQUUsZ0JBQUYsRUFBb0JDLEVBQXBCLENBQXVCLE9BQXZCLEVBQStCLFlBQVc7O0FBRXhDLFFBQU1DLFVBQVVGLEVBQUUsZUFBRixFQUFtQkcsR0FBbkIsRUFBaEI7O0FBRUEsUUFBR0QsWUFBWSxFQUFmLEVBQW1CO0FBQ2pCRSxZQUFNLFNBQU47QUFDQTtBQUNELEtBSEQsTUFHTztBQUNMQyxhQUFPQyxRQUFQLENBQWdCQyxJQUFoQixHQUF1QixTQUF2QjtBQUNEO0FBQ0YsR0FWRDtBQVdELENBYkQsRUFhR0MsTUFiSCIsImZpbGUiOiJhcHAuYmFiZWwuanMiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oJCl7XHJcblxyXG4gICQoJy5oZWFkZXItc2VhcmNoJykub24oJ2NsaWNrJyxmdW5jdGlvbigpIHtcclxuXHJcbiAgICBjb25zdCBrZXl3b3JkID0gJCgnLmhlYWRlci1pbnB1dCcpLnZhbCgpXHJcbiAgICBcclxuICAgIGlmKGtleXdvcmQgPT09ICcnKSB7XHJcbiAgICAgIGFsZXJ0KCfor7fovpPlhaXmkJzntKLlhoXlrrknKVxyXG4gICAgICByZXR1cm5cclxuICAgIH0gZWxzZSB7XHJcbiAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy9zZWFyY2gnXHJcbiAgICB9XHJcbiAgfSlcclxufSkoalF1ZXJ5KSJdfQ==
