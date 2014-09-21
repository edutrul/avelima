$(function () {
    var MAX_ROW = 20, MAX_COL = 20;
    

    if (localStorage.getItem('avelima_level') == undefined) {
      localStorage.setItem('avelima_level', 0);
    }
    else {
      lvl = localStorage.getItem('avelima_level');
      console.log('hola');
      console.log(lvl);
      for (i = 0; i < lvl; i++) {
        console.log(i);
        $('a[href="#portfolioModal' + i + '"] img').removeClass('img-black-white');
      }
    }
    dom_image = $('a[href="#portfolioModal' + localStorage.getItem('avelima_level') + '"] img');
    current_image = dom_image.attr('src');
    console.log(dom_image);
    console.log(dom_image.data('width'));
    console.log(dom_image.data('height'));
    $('#puzzle').width(dom_image.data('width')).height(dom_image.data('height'));
    var game = $('#puzzle').puzzle({image: 'url(' + current_image + ')',
                                    spacing: 4,
                                    rows: 2,
                                    cols: 2,
                                    });
console.log('game...');
console.log(game);
    click = function () {
        this.steps();
    }

    timer = {
        startTime: null,

        endTime: null,

        start: function () {
            this.startTime = new Date();
            return this.startTime;
        },

        end: function () {
            this.endTime = new Date();
            return this.endTime;
        },

        reset: function () {
            this.startTime = null;
            this.endTime = null;
        },

        totalSeconds: function () {
            endTime = this.endTime || new Date();
            if (this.startTime) {
                return Math.floor((endTime - this.startTime)/1000);
            } else {
                return 0;
            }
        }
    };

    complete = function () {
        timer.end();
        alert('Total time: ' + timer.totalSeconds() + ' seconds\n'
              + 'Steps: ' + $('#steps').text());
        game.unbind('click', click);
        game.div.css({'background-color': '#222',
                      'border-color': '#222'});
        console.log(game);
        console.log(game.image);
        patron_a = 'url(';
        patron_b = ')';
        img_path = game.image;
        img_path = img_path.replace(patron_a, '');
        img_path = img_path.replace(patron_b, '');
        console.log(img_path);
        //~ $('img[src="' + img_path + '"]').removeClass('img-black-white');
        lvl = parseInt(localStorage.getItem('avelima_level'));
        new_lvl = lvl + 1;
        $('a[href="#portfolioModal' + lvl + '"] img').removeClass('img-black-white');
        localStorage.setItem('avelima_level', new_lvl);

        dom_image = $('a[href="#portfolioModal' + new_lvl + '"] img');
        $('#puzzle').width(dom_image.data('width')).height(dom_image.data('height'));
        spacing = 2;
        if (new_lvl >= 2 && new_lvl <= 5) {
          spacing = 4;
        }
        game.render({image: 'url(' + dom_image.attr('src') + ')', spacing: spacing});
        game.shuffle();
    }

    game.bind('shuffle', function () {
        timer.start();
        game.unbind('complete', complete).one('complete', complete);
        game.unbind('click', click).bind('click', click);
        game.div.css({'background-color': 'black',
                      'border-color': 'black'});
        $('#steps').text(0);

    }).bind('step', function () {
        $('#steps').text(parseInt($('#steps').text()) + 1);

    }).shuffle();

    $('#shuffle').click(function () {
        game.shuffle();
    });

    $('#background').click(function () {
        //~ if (game.image === 'url(img/gavle.jpg)') {
            //~ $('#puzzle').width(720).height(480);
            //~ game.render({image: 'url(img/lake.jpg)', spacing: 2});
        //~ } else {
            //~ $('#puzzle').width(800).height(600);
            //~ game.render({image: 'url(img/gavle.jpg)', spacing: 4});
        //~ }
      

    });

    $('#rows-inc').click(function () {
        if (game.rows < MAX_ROW) {
            game.render({rows: game.rows + 1});
            game.shuffle();
        }
    });

    $('#rows-dec').click(function () {
        if (game.rows > 2) {
            game.render({rows: game.rows - 1});
            game.shuffle();
        }
    });

    $('#cols-inc').click(function () {
        if (game.cols < MAX_COL) {
            game.render({cols: game.cols + 1});
            game.shuffle();
        }
    });

    $('#cols-dec').click(function () {
        if (game.cols > 2) {
            game.render({cols: game.cols - 1});
            game.shuffle();
        }
    });
});
