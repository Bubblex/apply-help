'use strict';

(function ($) {
  $('#login').on('click', function () {

    var username = $("input[name='username']").val();
    var userpwd = $("input[name='userpwd']").val();

    if (username === '') {
      alert('请输入手机号');
      return;
    } else if (/^1[0-9]{10}$/.test(username) === false) {
      alert('手机号格式不正确');
      return;
    } else if (userpwd === '') {
      alert('请输入密码');
      return;
    }

    $.ajax({
      url: '',
      type: "POST",

      data: {
        username: username,
        userpwd: userpwd
      },

      success: function success(data) {

        if (data.status === 1) {
          window.location.href = '/';
        }
      }
    });
  });
})(jQuery);
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImxvZ2luLmJhYmVsLmpzIl0sIm5hbWVzIjpbIiQiLCJvbiIsInVzZXJuYW1lIiwidmFsIiwidXNlcnB3ZCIsImFsZXJ0IiwidGVzdCIsImFqYXgiLCJ1cmwiLCJ0eXBlIiwiZGF0YSIsInN1Y2Nlc3MiLCJzdGF0dXMiLCJ3aW5kb3ciLCJsb2NhdGlvbiIsImhyZWYiLCJqUXVlcnkiXSwibWFwcGluZ3MiOiI7O0FBQUEsQ0FBQyxVQUFTQSxDQUFULEVBQVc7QUFDVkEsSUFBRSxRQUFGLEVBQVlDLEVBQVosQ0FBZSxPQUFmLEVBQXVCLFlBQVc7O0FBRWhDLFFBQU1DLFdBQVdGLEVBQUUsd0JBQUYsRUFBNEJHLEdBQTVCLEVBQWpCO0FBQ0EsUUFBTUMsVUFBVUosRUFBRSx1QkFBRixFQUEyQkcsR0FBM0IsRUFBaEI7O0FBRUEsUUFBSUQsYUFBYSxFQUFqQixFQUFxQjtBQUNuQkcsWUFBTSxRQUFOO0FBQ0E7QUFDRCxLQUhELE1BSUssSUFBRyxlQUFlQyxJQUFmLENBQW9CSixRQUFwQixNQUFrQyxLQUFyQyxFQUE0QztBQUMvQ0csWUFBTSxVQUFOO0FBQ0g7QUFDRSxLQUhJLE1BSUEsSUFBSUQsWUFBWSxFQUFoQixFQUFvQjtBQUN2QkMsWUFBTSxPQUFOO0FBQ0E7QUFDRDs7QUFFREwsTUFBRU8sSUFBRixDQUFPO0FBQ0xDLFdBQUssRUFEQTtBQUVMQyxZQUFNLE1BRkQ7O0FBSUxDLFlBQU07QUFDSlIsa0JBQVVBLFFBRE47QUFFSkUsaUJBQVNBO0FBRkwsT0FKRDs7QUFTTE8sZUFBUSxpQkFBU0QsSUFBVCxFQUFlOztBQUVyQixZQUFJQSxLQUFLRSxNQUFMLEtBQWdCLENBQXBCLEVBQXVCO0FBQ3JCQyxpQkFBT0MsUUFBUCxDQUFnQkMsSUFBaEIsR0FBdUIsR0FBdkI7QUFDRDtBQUNGO0FBZEksS0FBUDtBQWdCRCxHQWxDRDtBQW1DRCxDQXBDRCxFQW9DR0MsTUFwQ0giLCJmaWxlIjoibG9naW4uYmFiZWwuanMiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24oJCl7XHJcbiAgJCgnI2xvZ2luJykub24oJ2NsaWNrJyxmdW5jdGlvbigpIHtcclxuXHJcbiAgICBjb25zdCB1c2VybmFtZSA9ICQoXCJpbnB1dFtuYW1lPSd1c2VybmFtZSddXCIpLnZhbCgpXHJcbiAgICBjb25zdCB1c2VycHdkID0gJChcImlucHV0W25hbWU9J3VzZXJwd2QnXVwiKS52YWwoKVxyXG5cclxuICAgIGlmKCB1c2VybmFtZSA9PT0gJycpIHtcclxuICAgICAgYWxlcnQoJ+ivt+i+k+WFpeaJi+acuuWPtycpXHJcbiAgICAgIHJldHVyblxyXG4gICAgfSBcclxuICAgIGVsc2UgaWYoL14xWzAtOV17MTB9JC8udGVzdCh1c2VybmFtZSkgPT09IGZhbHNlKSB7XHJcbiAgICAgIGFsZXJ0KCfmiYvmnLrlj7fmoLzlvI/kuI3mraPnoa4nKVxyXG5cdFx0XHRyZXR1cm5cclxuICAgIH1cclxuICAgIGVsc2UgaWYgKHVzZXJwd2QgPT09ICcnKSB7XHJcbiAgICAgIGFsZXJ0KCfor7fovpPlhaXlr4bnoIEnKVxyXG4gICAgICByZXR1cm5cclxuICAgIH1cclxuXHJcbiAgICAkLmFqYXgoe1xyXG4gICAgICB1cmw6ICcnLFxyXG4gICAgICB0eXBlOiBcIlBPU1RcIixcclxuXHJcbiAgICAgIGRhdGE6IHtcclxuICAgICAgICB1c2VybmFtZTogdXNlcm5hbWUsXHJcbiAgICAgICAgdXNlcnB3ZDogdXNlcnB3ZCxcclxuICAgICAgfSxcclxuXHJcbiAgICAgIHN1Y2Nlc3M6ZnVuY3Rpb24oZGF0YSkge1xyXG5cclxuICAgICAgICBpZiAoZGF0YS5zdGF0dXMgPT09IDEpIHtcclxuICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy8nO1xyXG4gICAgICAgIH1cclxuICAgICAgfVxyXG4gICAgfSlcclxuICB9KVxyXG59KShqUXVlcnkpOyJdfQ==
