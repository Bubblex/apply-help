"use strict";

(function ($) {

  $.fn.plusready = function (options) {
    var defaults = {
      min: 1,
      max: 10
    };

    var op = $.extend(defaults, options);

    var $btn_plus = $(".js-less-num");
    var $btn_minus = $(".js-plus-num");
    var $input = $(".js-num");

    var num = parseInt($input.val());
    $btn_plus.click(function () {
      if (num < op.max) {
        num++;
        $input.val(num);
      }
    });

    $btn_minus.click(function () {
      if (num > op.min) {
        num--;
        $input.val(num);
      }
    });
  };

  $("body").plusready();

  $("select[name='thingtype']").on('change', function () {
    var $thingtype = $("select[name='thingtype']"),
        $thing = $("select[name='thing']"),
        $other = $("input[name='other']");

    var value = $thingtype.val()

    if (value === '其他') {
      $thingtype.show();
      $thing.hide()
      $other.show();
    } else {
      $thing.show()
      $other.hide();
    }
  });

  $("select[name='thing']").on('change', function () {
    // var $thingtype = $("select[name='thingtype']"),
    //     $thing = $("select[name='thing']"),
    //     $other = $("input[name='other']");

    // if ($($thing).val() === '其他') {
    //   $other.show();
    //   $thingtype.hide();
    // } else {
    //   $thingtype.show();
    //   $other.hide();
    // }
  });

  $('.apply-btn').on('click', function () {
    var applyhelpinfo = {
      username: $("input[name='username']").val(),
      sex: $("input[name='sex']:checked").val(),
      idnumber: $("input[name='idnumber']").val(),
      phone: $("input[name='phone']").val(),
      thing: $("select[name='thing']").val() === '其他' ? $("input[name='other']").val() : $("select[name='thing']").val(),
      number: $("input[name='number']").val(),
      summary: $("textarea[name='summary']").val(),
      photo: $("input[name='photo']").val(),
      city: $("input[name='city']").val(),
      route: $("input[name='route']").val(),
      detailadr: $("textarea[name='detailadr']").val()
    };
    console.log(applyhelpinfo);

    var username = applyhelpinfo.username,
        sex = applyhelpinfo.sex,
        idnumber = applyhelpinfo.idnumber,
        phone = applyhelpinfo.phone,
        thing = applyhelpinfo.thing,
        number = applyhelpinfo.number,
        summary = applyhelpinfo.summary,
        photo = applyhelpinfo.photo,
        city = applyhelpinfo.city,
        route = applyhelpinfo.route,
        detailadr = applyhelpinfo.detailadr;


    if (username === '') {
      alert('请输入真实姓名');
      return;
    } else if (idnumber === '') {
      alert('请输入身份证号');
      return;
    } else if (phone === '') {
      alert('请输入手机号');
      return;
    } else if (/^1[0-9]{10}$/.test(phone) === false) {
      alert('手机号格式不正确');
      return;
    } else if (thing === '') {
      alert('请输入物品');
      return;
    } else if (summary === '') {
      alert('请输入情况简介');
      return;
    } else if (city === '') {
      alert('请输入省市');
      return;
    } else if (route === '') {
      alert('请输入街道');
      return;
    } else if (detailadr === '') {
      alert('请输入详细地址');
      return;
    }

    $.ajax({
      url: '',
      type: "POST",

      data: {
        username: username,
        sex: sex,
        idnumber: idnumber,
        phone: phone,
        thing: thing,
        number: number,
        summary: summary,
        photo: photo,
        city: city,
        route: route,
        detailadr: detailadr
      },

      success: function success(data) {
        if (data.status === 1) {
          window.location.href = '/home/applyhistory';
        }
      }
    });
  });
})(jQuery);
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcGx5aGVscC5iYWJlbC5qcyJdLCJuYW1lcyI6WyIkIiwiZm4iLCJwbHVzcmVhZHkiLCJvcHRpb25zIiwiZGVmYXVsdHMiLCJtaW4iLCJtYXgiLCJvcCIsImV4dGVuZCIsIiRidG5fcGx1cyIsIiRidG5fbWludXMiLCIkaW5wdXQiLCJudW0iLCJwYXJzZUludCIsInZhbCIsImNsaWNrIiwib24iLCIkdGhpbmd0eXBlIiwiJHRoaW5nIiwiJG90aGVyIiwic2hvdyIsImhpZGUiLCJhcHBseWhlbHBpbmZvIiwidXNlcm5hbWUiLCJzZXgiLCJpZG51bWJlciIsInBob25lIiwidGhpbmciLCJudW1iZXIiLCJzdW1tYXJ5IiwicGhvdG8iLCJjaXR5Iiwicm91dGUiLCJkZXRhaWxhZHIiLCJjb25zb2xlIiwibG9nIiwiYWxlcnQiLCJ0ZXN0IiwiYWpheCIsInVybCIsInR5cGUiLCJkYXRhIiwic3VjY2VzcyIsInN0YXR1cyIsIndpbmRvdyIsImxvY2F0aW9uIiwiaHJlZiIsImpRdWVyeSJdLCJtYXBwaW5ncyI6Ijs7QUFBQSxDQUFDLFVBQVNBLENBQVQsRUFBVzs7QUFFVkEsSUFBRUMsRUFBRixDQUFLQyxTQUFMLEdBQWlCLFVBQVNDLE9BQVQsRUFBaUI7QUFDaEMsUUFBTUMsV0FBUztBQUNYQyxXQUFJLENBRE87QUFFWEMsV0FBSTtBQUZPLEtBQWY7O0FBS0EsUUFBTUMsS0FBS1AsRUFBRVEsTUFBRixDQUFTSixRQUFULEVBQWtCRCxPQUFsQixDQUFYOztBQUVBLFFBQU1NLFlBQVVULEVBQUUsY0FBRixDQUFoQjtBQUNBLFFBQU1VLGFBQVdWLEVBQUUsY0FBRixDQUFqQjtBQUNBLFFBQU1XLFNBQU9YLEVBQUUsU0FBRixDQUFiOztBQUVBLFFBQUlZLE1BQU1DLFNBQVNGLE9BQU9HLEdBQVAsRUFBVCxDQUFWO0FBQ0FMLGNBQVVNLEtBQVYsQ0FBZ0IsWUFBVTtBQUN4QixVQUFHSCxNQUFJTCxHQUFHRCxHQUFWLEVBQWM7QUFDVk07QUFDQUQsZUFBT0csR0FBUCxD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QThJR0MsTUE5SUgiLCJmaWxlIjoiYXBwbHloZWxwLmJhYmVsLmpzIiwic291cmNlc0NvbnRlbnQiOlsiKGZ1bmN0aW9uKCQpe1xyXG4gICAgIFxyXG4gICQuZm4ucGx1c3JlYWR5ID0gZnVuY3Rpb24ob3B0aW9ucyl7XHJcbiAgICBjb25zdCBkZWZhdWx0cz17XHJcbiAgICAgICAgbWluOjEsXHJcbiAgICAgICAgbWF4OjEwLFxyXG4gICAgfVxyXG4gICAgICBcclxuICAgIGNvbnN0IG9wID0gJC5leHRlbmQoZGVmYXVsdHMsb3B0aW9ucylcclxuICAgIFxyXG4gICAgY29uc3QgJGJ0bl9wbHVzPSQoXCIuanMtbGVzcy1udW1cIilcclxuICAgIGNvbnN0ICRidG5fbWludXM9JChcIi5qcy1wbHVzLW51bVwiKVxyXG4gICAgY29uc3QgJGlucHV0PSQoXCIuanMtbnVtXCIpXHJcbiAgICBcclxuICAgIGxldCBudW0gPSBwYXJzZUludCgkaW5wdXQudmFsKCkpXHJcbiAgICAkYnRuX3BsdXMuY2xpY2soZnVuY3Rpb24oKXtcclxuICAgICAgaWYobnVtPG9wLm1heCl7XHJcbiAgICAgICAgICBudW0rKztcclxuICAgICAgICAgICRpbnB1dC52YWwobnVtKVxyXG4gICAgICB9ICAgICAgXHJcbiAgICB9KVxyXG4gICAgXHJcbiAgICAkYnRuX21pbnVzLmNsaWNrKGZ1bmN0aW9uKCl7ICAgICAgICAgICBcclxuICAgICAgaWYobnVtPm9wLm1pbil7XHJcbiAgICAgICAgICBudW0tLVxyXG4gICAgICAgICAgJGlucHV0LnZhbChudW0pXHJcbiAgICAgIH1cclxuICAgIH0pXHJcbiAgfVxyXG4gIFxyXG4gICQoXCJib2R5XCIpLnBsdXNyZWFkeSgpXHJcblxyXG5cclxuICAkKFwic2VsZWN0W25hbWU9J3RoaW5nJ11cIikub24oJ2NoYW5nZScsZnVuY3Rpb24oKSB7XHJcbiAgICBjb25zdCAkdGhpbmd0eXBlID0gJChcInNlbGVjdFtuYW1lPSd0aGluZ3R5cGUnXVwiKSxcclxuICAgICAgJHRoaW5nID0gJChcInNlbGVjdFtuYW1lPSd0aGluZyddXCIpLFxyXG4gICAgICAkb3RoZXIgPSAkKFwiaW5wdXRbbmFtZT0nb3RoZXInXVwiKVxyXG5cclxuICAgIGlmKCQoJHRoaW5nKS52YWwoKSA9PT0gJ+WFtuS7licpIHtcclxuICAgICAgJG90aGVyLnNob3coKVxyXG4gICAgICAkdGhpbmd0eXBlLmhpZGUoKVxyXG4gICAgfSBlbHNlIHtcclxuICAgICAgJHRoaW5ndHlwZS5zaG93KClcclxuICAgICAgJG90aGVyLmhpZGUoKVxyXG4gICAgfVxyXG4gIH0pXHJcbiAgICAgXHJcbiAgICAgXHJcbiAgJCgnLmFwcGx5LWJ0bicpLm9uKCdjbGljaycsZnVuY3Rpb24oKSB7XHJcbiAgICBjb25zdCBhcHBseWhlbHBpbmZvID0ge1xyXG4gICAgICB1c2VybmFtZTogJChcImlucHV0W25hbWU9J3VzZXJuYW1lJ11cIikudmFsKCksXHJcbiAgICAgIHNleDogJChcImlucHV0W25hbWU9J3NleCddOmNoZWNrZWRcIikudmFsKCksXHJcbiAgICAgIGlkbnVtYmVyOiAkKFwiaW5wdXRbbmFtZT0naWRudW1iZXInXVwiKS52YWwoKSxcclxuICAgICAgcGhvbmU6ICQoXCJpbnB1dFtuYW1lPSdwaG9uZSddXCIpLnZhbCgpLFxyXG4gICAgICB0aGluZzogJChcInNlbGVjdFtuYW1lPSd0aGluZyddXCIpLnZhbCgpID09PSAn5YW25LuWJ1xyXG4gICAgICAgID8gJChcImlucHV0W25hbWU9J290aGVyJ11cIikudmFsKClcclxuICAgICAgICA6ICQoXCJzZWxlY3RbbmFtZT0ndGhpbmcnXVwiKS52YWwoKSxcclxuICAgICAgbnVtYmVyOiAkKFwiaW5wdXRbbmFtZT0nbnVtYmVyJ11cIikudmFsKCksXHJcbiAgICAgIHN1bW1hcnk6ICQoXCJ0ZXh0YXJlYVtuYW1lPSdzdW1tYXJ5J11cIikudmFsKCksXHJcbiAgICAgIHBob3RvOiAkKFwiaW5wdXRbbmFtZT0ncGhvdG8nXVwiKS52YWwoKSxcclxuICAgICAgY2l0eTogJChcImlucHV0W25hbWU9J2NpdHknXVwiKS52YWwoKSxcclxuICAgICAgcm91dGU6ICQoXCJpbnB1dFtuYW1lPSdyb3V0ZSddXCIpLnZhbCgpLFxyXG4gICAgICBkZXRhaWxhZHI6ICQoXCJ0ZXh0YXJlYVtuYW1lPSdkZXRhaWxhZHInXVwiKS52YWwoKSxcclxuICAgIH1cclxuICAgIGNvbnNvbGUubG9nKGFwcGx5aGVscGluZm8pXHJcblxyXG4gICAgY29uc3Qge1xyXG4gICAgICB1c2VybmFtZSxcclxuICAgICAgc2V4LFxyXG4gICAgICBpZG51bWJlcixcclxuICAgICAgcGhvbmUsXHJcbiAgICAgIHRoaW5nLFxyXG4gICAgICBudW1iZXIsXHJcbiAgICAgIHN1bW1hcnksXHJcbiAgICAgIHBob3RvLFxyXG4gICAgICBjaXR5LFxyXG4gICAgICByb3V0ZSxcclxuICAgICAgZGV0YWlsYWRyLFxyXG4gICAgfSA9IGFwcGx5aGVscGluZm9cclxuXHJcbiAgICBpZiggdXNlcm5hbWUgPT09ICcnKSB7XHJcbiAgICAgIGFsZXJ0KCfor7fovpPlhaXnnJ/lrp7lp5PlkI0nKVxyXG4gICAgICByZXR1cm5cclxuICAgIH1cclxuICAgIGVsc2UgaWYgKGlkbnVtYmVyID09PSAnJykge1xyXG4gICAgICBhbGVydCgn6K+36L6T5YWl6Lqr5Lu96K+B5Y+3JylcclxuICAgICAgcmV0dXJuXHJcbiAgICB9XHJcbiAgICBlbHNlIGlmIChwaG9uZSA9PT0gJycpIHtcclxuICAgICAgYWxlcnQoJ+ivt+i+k+WFpeaJi+acuuWPtycpXHJcbiAgICAgIHJldHVyblxyXG4gICAgfVxyXG4gICAgZWxzZSBpZigvXjFbMC05XXsxMH0kLy50ZXN0KHBob25lKSA9PT0gZmFsc2UpIHtcclxuICAgICAgYWxlcnQoJ+aJi+acuuWPt+agvOW8j+S4jeato+ehricpXHJcblx0XHRcdHJldHVyblxyXG4gICAgfVxyXG4gICAgZWxzZSBpZiAodGhpbmcgPT09ICcnKSB7XHJcbiAgICAgIGFsZXJ0KCfor7fovpPlhaXnianlk4EnKVxyXG4gICAgICByZXR1cm5cclxuICAgIH1cclxuICAgIGVsc2UgaWYgKHN1bW1hcnkgPT09ICcnKSB7XHJcbiAgICAgIGFsZXJ0KCfor7fovpPlhaXmg4XlhrXnroDku4snKVxyXG4gICAgICByZXR1cm5cclxuICAgIH1cclxuICAgIGVsc2UgaWYgKGNpdHkgPT09ICcnKSB7XHJcbiAgICAgIGFsZXJ0KCfor7fovpPlhaXnnIHluIInKVxyXG4gICAgICByZXR1cm5cclxuICAgIH1cclxuICAgIGVsc2UgaWYgKHJvdXRlID09PSAnJykge1xyXG4gICAgICBhbGVydCgn6K+36L6T5YWl6KGX6YGTJylcclxuICAgICAgcmV0dXJuXHJcbiAgICB9XHJcbiAgICBlbHNlIGlmIChkZXRhaWxhZHIgPT09ICcnKSB7XHJcbiAgICAgIGFsZXJ0KCfor7fovpPlhaXor6bnu4blnLDlnYAnKVxyXG4gICAgICByZXR1cm5cclxuICAgIH1cclxuXHJcbiAgICAkLmFqYXgoe1xyXG4gICAgICB1cmw6ICcnLFxyXG4gICAgICB0eXBlOiBcIlBPU1RcIixcclxuXHJcbiAgICAgIGRhdGE6IHtcclxuICAgICAgICB1c2VybmFtZTogdXNlcm5hbWUsXHJcbiAgICAgICAgc2V4OiBzZXgsXHJcbiAgICAgICAgaWRudW1iZXI6IGlkbnVtYmVyLFxyXG4gICAgICAgIHBob25lOiBwaG9uZSxcclxuICAgICAgICB0aGluZzogdGhpbmcsXHJcbiAgICAgICAgbnVtYmVyOiBudW1iZXIsXHJcbiAgICAgICAgc3VtbWFyeTogc3VtbWFyeSxcclxuICAgICAgICBwaG90bzogcGhvdG8sXHJcbiAgICAgICAgY2l0eTogY2l0eSxcclxuICAgICAgICByb3V0ZTogcm91dGUsXHJcbiAgICAgICAgZGV0YWlsYWRyOiBkZXRhaWxhZHIsXHJcbiAgICAgIH0sXHJcblxyXG4gICAgICBzdWNjZXNzOmZ1bmN0aW9uKGRhdGEpIHtcclxuICAgICAgICBpZiAoZGF0YS5zdGF0dXMgPT09IDEpIHtcclxuICAgICAgICAgIHdpbmRvdy5sb2NhdGlvbi5ocmVmID0gJy9ob21lL2FwcGx5aGlzdG9yeSc7XHJcbiAgICAgICAgfVxyXG4gICAgICB9XHJcbiAgICB9KVxyXG4gIH0pXHJcbn0pKGpRdWVyeSkiXX0=
