'use strict';

(function ($) {

  $('.get-code').on('click', function () {
    $(this).addClass('disabled');

    var countdown = 60;

    var timer = setInterval(function () {
      if (countdown === 0) {
        $('.get-code').text('获取验证码');
        $('.get-code').removeClass('disabled');
        countdown = 60;
        clearInterval(timer);
        return;
      } else {
        $('.get-code').text(countdown + 's后重新发送');
        countdown--;
      }
    }, 1000);
  });

  $('#register').on('click', function () {

    var username = $("input[name='username']").val();
    var name = $("input[name='name']").val();
    var userpwd = $("input[name='userpwd']").val();
    var confirm_userpwd = $("input[name='confirm-userpwd']").val();
    var code = $("input[name='code']").val();
    var school = $("input[name='school']").val();
    var room = $("input[name='room']").val();
    var detailaddr = $("input[name='detailaddr']").val();

    if (username === '') {
      alert('请输入手机号');
      return;
    } else if (/^1[0-9]{10}$/.test(username) === false) {
      alert('手机号格式不正确');
      return;
    } else if (name === '') {
      alert('请输入姓名');
      return;
    } else if (userpwd === '') {
      alert('请输入密码');
      return;
    } else if (confirm_userpwd === '') {
      alert('请确认密码');
      return;
    } else if (confirm_userpwd != userpwd) {
      alert('两次密码不一致');
      return;
    } else if (!$('.get-code').hasClass('disabled')) {
      alert('请获取验证码');
      return;
    } else if (code === '') {
      alert('请输入验证码');
      return;
    } else if (school === '') {
      alert('请输入学校');
      return;
    } else if (room === '') {
      alert('请输入宿舍');
      return;
    } else if (detailaddr === '') {
      alert('请输入详细地址');
      return;
    } else if (detailaddr.length < 5) {
      alert('详细地址长度少于5个字');
      return;
    }

    $.ajax({
      url: '/home/register',
      type: "POST",
      data: {
        telephone: username,
        name: name,
        password: userpwd,
        school: school,
        dorm: room,
        address: detailaddr
      },
      success: function success(data) {
        alert(data.message)

        if (data.status === 1) {
          window.location.href = '/home/login';
        }
      }
    });
  });
})(jQuery);
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInJlZ2lzdGVyLmJhYmVsLmpzIl0sIm5hbWVzIjpbIiQiLCJvbiIsImFkZENsYXNzIiwiY291bnRkb3duIiwidGltZXIiLCJzZXRJbnRlcnZhbCIsInRleHQiLCJyZW1vdmVDbGFzcyIsImNsZWFySW50ZXJ2YWwiLCJ1c2VybmFtZSIsInZhbCIsIm5hbWUiLCJ1c2VycHdkIiwiY29uZmlybV91c2VycHdkIiwiY29kZSIsInNjaG9vbCIsInJvb20iLCJkZXRhaWxhZGRyIiwiYWxlcnQiLCJ0ZXN0IiwiaGFzQ2xhc3MiLCJsZW5ndGgiLCJhamF4IiwidXJsIiwidHlwZSIsImRhdGEiLCJzdWNjZXNzIiwic3RhdHVzIiwid2luZG93IiwibG9jYXRpb24iLCJocmVmIiwialF1ZXJ5Il0sIm1hcHBpbmdzIjoiOztBQUFBLENBQUMsVUFBU0EsQ0FBVCxFQUFXOztBQUVWQSxJQUFFLFdBQUYsRUFBZUMsRUFBZixDQUFrQixPQUFsQixFQUEwQixZQUFXO0FBQ25DRCxNQUFFLElBQUYsRUFBUUUsUUFBUixDQUFpQixVQUFqQjs7QUFFQSxRQUFJQyxZQUFZLEVBQWhCOztBQUVBLFFBQU1DLFFBQVFDLFlBQVksWUFBVztBQUNuQyxVQUFJRixjQUFjLENBQWxCLEVBQXFCO0FBQ25CSCxVQUFFLFdBQUYsRUFBZU0sSUFBZixDQUFvQixPQUFwQjtBQUNBTixVQUFFLFdBQUYsRUFBZU8sV0FBZixDQUEyQixVQUEzQjtBQUNBSixvQkFBWSxFQUFaO0FBQ0FLLHNCQUFjSixLQUFkO0FBQ0E7QUFFRCxPQVBELE1BT087QUFDTEosVUFBRSxXQUFGLEVBQWVNLElBQWYsQ0FBb0JILFlBQVksUUFBaEM7QUFDQUE7QUFDRDtBQUNGLEtBWmEsRUFhYixJQWJhLENBQWQ7QUFlRCxHQXBCRDs7QUFzQkFILElBQUUsV0FBRixFQUFlQyxFQUFmLENBQWtCLE9BQWxCLEVBQTBCLFlBQVc7O0FBRW5DLFFBQU1RLFdBQVdULEVBQUUsd0JBQUYsRUFBNEJVLEdBQTVCLEVBQWpCO0FBQ0EsUUFBTUMsT0FBT1gsRUFBRSxvQkFBRixFQUF3QlUsR0FBeEIsRUFBYjtBQUNBLFFBQU1FLFVBQVVaLEVBQUUsdUJBQUYsRUFBMkJVLEdBQTNCLEVBQWhCO0FBQ0EsUUFBTUcsa0JBQWtCYixFQUFFLCtCQUFGLEVBQW1DVSxHQUFuQyxFQUF4QjtBQUNBLFFBQU1JLE9BQU9kLEVBQUUsb0JBQUYsRUFBd0JVLEdBQXhCLEVBQWI7QUFDQSxRQUFNSyxTQUFTZixFQUFFLHNCQUFGLEVBQTBCVSxHQUExQixFQUFmO0FBQ0EsUUFBTU0sT0FBT2hCLEVBQUUsb0JBQUYsRUFBd0JVLEdBQXhCLEVBQWI7QUFDQSxRQUFNTyxhQUFhakIsRUFBRSwwQkFBRixFQUE4QlUsR0FBOUIsRUFBbkI7O0FBRUEsUUFBSUQsYUFBYSxFQUFqQixFQUFxQjtBQUNuQlMsWUFBTSxRQUFOO0FBQ0E7QUFDRCxLQUhELE1BSUssSUFBRyxlQUFlQyxJQUFmLENBQW9CVixRQUFwQixNQUFrQyxLQUFyQyxFQUE0QztBQUMvQ1MsWUFBTSxVQUFOO0FBQ0g7QUFDRSxLQUhJLE1BSUEsSUFBSVAsU0FBUyxFQUFiLEVBQWlCO0FBQ3BCTyxZQUFNLE9BQU47QUFDQTtBQUNELEtBSEksTUFJQSxJQUFJTixZQUFZLEVBQWhCLEVBQW9CO0FBQ3ZCTSxZQUFNLE9BQU47QUFDQTtBQUNELEtBSEksTUFJQSxJQUFJTCxvQkFBb0IsRUFBeEIsRUFBNEI7QUFDL0JLLFlBQU0sT0FBTjtBQUNBO0FBQ0QsS0FISSxNQUlBLElBQUlMLG1CQUFtQkQsT0FBdkIsRUFBZ0M7QUFDbkNNLFlBQU0sU0FBTjtBQUNBO0FBQ0QsS0FISSxNQUlBLElBQUksQ0FBQ2xCLEVBQUUsV0FBRixFQUFlb0IsUUFBZixDQUF3QixVQUF4QixDQUFMLEVBQTBDO0FBQzdDRixZQUFNLFFBQU47QUFDQTtBQUNELEtBSEksTUFJQSxJQUFJSixTQUFTLEVBQWIsRUFBaUI7QUFDcEJJLFlBQU0sUUFBTjtBQUNBO0FBQ0QsS0FISSxNQUlBLElBQUlILFdBQVcsRUFBZixFQUFtQjtBQUN0QkcsWUFBTSxPQUFOO0FBQ0E7QUFDRCxLQUhJLE1BSUEsSUFBSUYsU0FBUyxFQUFiLEVBQWlCO0FBQ3BCRSxZQUFNLE9BQU47QUFDQTtBQUNELEtBSEksTUFJQSxJQUFJRCxlQUFlLEVBQW5CLEVBQXVCO0FBQzFCQyxZQUFNLFNBQU47QUFDQTtBQUNELEtBSEksTUFJQSxJQUFJRCxXQUFXSSxNQUFYLEdBQW9CLENBQXhCLEVBQTJCO0FBQzlCSCxZQUFNLGFBQU47QUFDQTtBQUNEOztBQUVEbEIsTUFBRXNCLElBQUYsQ0FBTztBQUNMQyxXQUFLLEVBREE7QUFFTEMsWUFBTSxNQUZEOztBQUlMQyxZQUFNO0FBQ0poQixrQkFBVUEsUUFETjtBQUVKRSxjQUFNQSxJQUZGO0FBR0pDLGlCQUFTQSxPQUhMO0FBSUpDLHlCQUFpQkEsZUFKYjtBQUtKQyxjQUFNQSxJQUxGO0FBTUpDLGdCQUFRQSxNQU5KO0FBT0pDLGNBQU1BLElBUEY7QUFRSkMsb0JBQVlBO0FBUlIsT0FKRDs7QUFlTFMsZUFBUSxpQkFBU0QsSUFBVCxFQUFlOztBQUVyQixZQUFJQSxLQUFLRSxNQUFMLEtBQWdCLENBQXBCLEVBQXVCO0FBQ3JCQyxpQkFBT0MsUUFBUCxDQUFnQkMsSUFBaEIsR0FBdUIsYUFBdkI7QUFDRDtBQUNGO0FBcEJJLEtBQVA7QUFzQkQsR0FsRkQ7QUFtRkQsQ0EzR0QsRUEyR0dDLE1BM0dIIiwiZmlsZSI6InJlZ2lzdGVyLmJhYmVsLmpzIiwic291cmNlc0NvbnRlbnQiOlsiKGZ1bmN0aW9uKCQpe1xyXG5cclxuICAkKCcuZ2V0LWNvZGUnKS5vbignY2xpY2snLGZ1bmN0aW9uKCkge1xyXG4gICAgJCh0aGlzKS5hZGRDbGFzcygnZGlzYWJsZWQnKVxyXG5cclxuICAgIHZhciBjb3VudGRvd24gPSA2MFxyXG5cclxuICAgIGNvbnN0IHRpbWVyID0gc2V0SW50ZXJ2YWwoZnVuY3Rpb24oKSB7IFxyXG4gICAgICBpZiAoY291bnRkb3duID09PSAwKSB7IFxyXG4gICAgICAgICQoJy5nZXQtY29kZScpLnRleHQoJ+iOt+WPlumqjOivgeeggScpXHJcbiAgICAgICAgJCgnLmdldC1jb2RlJykucmVtb3ZlQ2xhc3MoJ2Rpc2FibGVkJylcclxuICAgICAgICBjb3VudGRvd24gPSA2MCBcclxuICAgICAgICBjbGVhckludGVydmFsKHRpbWVyKVxyXG4gICAgICAgIHJldHVyblxyXG4gICAgICAgIFxyXG4gICAgICB9IGVsc2UgeyBcclxuICAgICAgICAkKCcuZ2V0LWNvZGUnKS50ZXh0KGNvdW50ZG93biArICdz5ZCO6YeN5paw5Y+R6YCBJyk7IFxyXG4gICAgICAgIGNvdW50ZG93bi0tXHJcbiAgICAgIH0gXHJcbiAgICB9XHJcbiAgICAsMTAwMCkgXHJcblxyXG4gIH0pXHJcblxyXG4gICQoJyNyZWdpc3RlcicpLm9uKCdjbGljaycsZnVuY3Rpb24oKSB7XHJcblxyXG4gICAgY29uc3QgdXNlcm5hbWUgPSAkKFwiaW5wdXRbbmFtZT0ndXNlcm5hbWUnXVwiKS52YWwoKVxyXG4gICAgY29uc3QgbmFtZSA9ICQoXCJpbnB1dFtuYW1lPSduYW1lJ11cIikudmFsKClcclxuICAgIGNvbnN0IHVzZXJwd2QgPSAkKFwiaW5wdXRbbmFtZT0ndXNlcnB3ZCddXCIpLnZhbCgpXHJcbiAgICBjb25zdCBjb25maXJtX3VzZXJwd2QgPSAkKFwiaW5wdXRbbmFtZT0nY29uZmlybS11c2VycHdkJ11cIikudmFsKClcclxuICAgIGNvbnN0IGNvZGUgPSAkKFwiaW5wdXRbbmFtZT0nY29kZSddXCIpLnZhbCgpXHJcbiAgICBjb25zdCBzY2hvb2wgPSAkKFwiaW5wdXRbbmFtZT0nc2Nob29sJ11cIikudmFsKClcclxuICAgIGNvbnN0IHJvb20gPSAkKFwiaW5wdXRbbmFtZT0ncm9vbSddXCIpLnZhbCgpXHJcbiAgICBjb25zdCBkZXRhaWxhZGRyID0gJChcImlucHV0W25hbWU9J2RldGFpbGFkZHInXVwiKS52YWwoKVxyXG5cclxuICAgIGlmKCB1c2VybmFtZSA9PT0gJycpIHtcclxuICAgICAgYWxlcnQoJ+ivt+i+k+WFpeaJi+acuuWPtycpXHJcbiAgICAgIHJldHVyblxyXG4gICAgfSBcclxuICAgIGVsc2UgaWYoL14xWzAtOV17MTB9JC8udGVzdCh1c2VybmFtZSkgPT09IGZhbHNlKSB7XHJcbiAgICAgIGFsZXJ0KCfmiYvmnLrlj7fmoLzlvI/kuI3mraPnoa4nKVxyXG5cdFx0XHRyZXR1cm5cclxuICAgIH1cclxuICAgIGVsc2UgaWYgKG5hbWUgPT09ICcnKSB7XHJcbiAgICAgIGFsZXJ0KCfor7fovpPlhaXlp5PlkI0nKVxyXG4gICAgICByZXR1cm5cclxuICAgIH1cclxuICAgIGVsc2UgaWYgKHVzZXJwd2QgPT09ICcnKSB7XHJcbiAgICAgIGFsZXJ0KCfor7fovpPlhaXlr4bnoIEnKVxyXG4gICAgICByZXR1cm5cclxuICAgIH1cclxuICAgIGVsc2UgaWYgKGNvbmZpcm1fdXNlcnB3ZCA9PT0gJycpIHtcclxuICAgICAgYWxlcnQoJ+ivt+ehruiupOWvhueggScpXHJcbiAgICAgIHJldHVyblxyXG4gICAgfVxyXG4gICAgZWxzZSBpZiAoY29uZmlybV91c2VycHdkICE9IHVzZXJwd2QpIHtcclxuICAgICAgYWxlcnQoJ+S4pOasoeWvhueggeS4jeS4gOiHtCcpXHJcbiAgICAgIHJldHVyblxyXG4gICAgfVxyXG4gICAgZWxzZSBpZiAoISQoJy5nZXQtY29kZScpLmhhc0NsYXNzKCdkaXNhYmxlZCcpKSB7XHJcbiAgICAgIGFsZXJ0KCfor7fojrflj5bpqozor4HnoIEnKVxyXG4gICAgICByZXR1cm5cclxuICAgIH1cclxuICAgIGVsc2UgaWYgKGNvZGUgPT09ICcnKSB7XHJcbiAgICAgIGFsZXJ0KCfor7fovpPlhaXpqozor4HnoIEnKVxyXG4gICAgICByZXR1cm5cclxuICAgIH1cclxuICAgIGVsc2UgaWYgKHNjaG9vbCA9PT0gJycpIHtcclxuICAgICAgYWxlcnQoJ+ivt+i+k+WFpeWtpuagoScpXHJcbiAgICAgIHJldHVyblxyXG4gICAgfVxyXG4gICAgZWxzZSBpZiAocm9vbSA9PT0gJycpIHtcclxuICAgICAgYWxlcnQoJ+ivt+i+k+WFpeWuv+iIjScpXHJcbiAgICAgIHJldHVyblxyXG4gICAgfVxyXG4gICAgZWxzZSBpZiAoZGV0YWlsYWRkciA9PT0gJycpIHtcclxuICAgICAgYWxlcnQoJ+ivt+i+k+WFpeivpue7huWcsOWdgCcpXHJcbiAgICAgIHJldHVyblxyXG4gICAgfVxyXG4gICAgZWxzZSBpZiAoZGV0YWlsYWRkci5sZW5ndGggPCA1KSB7XHJcbiAgICAgIGFsZXJ0KCfor6bnu4blnLDlnYDplb/luqblsJHkuo415Liq5a2XJylcclxuICAgICAgcmV0dXJuXHJcbiAgICB9XHJcblxyXG4gICAgJC5hamF4KHtcclxuICAgICAgdXJsOiAnJyxcclxuICAgICAgdHlwZTogXCJQT1NUXCIsXHJcblxyXG4gICAgICBkYXRhOiB7XHJcbiAgICAgICAgdXNlcm5hbWU6IHVzZXJuYW1lLFxyXG4gICAgICAgIG5hbWU6IG5hbWUsXHJcbiAgICAgICAgdXNlcnB3ZDogdXNlcnB3ZCxcclxuICAgICAgICBjb25maXJtX3VzZXJwd2Q6IGNvbmZpcm1fdXNlcnB3ZCxcclxuICAgICAgICBjb2RlOiBjb2RlLFxyXG4gICAgICAgIHNjaG9vbDogc2Nob29sLFxyXG4gICAgICAgIHJvb206IHJvb20sXHJcbiAgICAgICAgZGV0YWlsYWRkcjogZGV0YWlsYWRkcixcclxuICAgICAgfSxcclxuXHJcbiAgICAgIHN1Y2Nlc3M6ZnVuY3Rpb24oZGF0YSkge1xyXG5cclxuICAgICAgICBpZiAoZGF0YS5zdGF0dXMgPT09IDEpIHtcclxuICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy9ob21lL2xvZ2luJztcclxuICAgICAgICB9XHJcbiAgICAgIH1cclxuICAgIH0pXHJcbiAgfSlcclxufSkoalF1ZXJ5KTsiXX0=
