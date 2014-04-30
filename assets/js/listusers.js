    (function($){
      var url = 'https://api.github.com/repos/maikwause/barrierefrechheit/contributors?callback=?';

      function listContributors(data) {

        var html = '';
        $(data).each(function(i, user){
          html += '<li><a href="'+ user.url.replace('api.','').replace('users/','') +'"><img src="'+ user.avatar_url +'" alt="'+ user.login +'" class="contributor-avatar"></a></li>';
        });

        $(html).appendTo('#mitwirkende');

      }


      if(window.matchMedia('(min-width: 480px)').matches) {
        $.ajax({
          type: 'GET',
          url: url,
          async: false,
          contentType: "application/json",
          dataType: 'jsonp',
          success: function(data){
            listContributors(data.data);
          },
          error: function(e) {
            console.log(e.message);
          }
        });
      }

    })(jQuery);
