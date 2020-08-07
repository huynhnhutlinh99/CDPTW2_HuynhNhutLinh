document.addEventListener('DOMContentLoaded', function() {
    var chart1 = window.chart = new EasyPieChart(document.querySelector('#chart-1'), {
        easing: 'easeOutElastic',
        delay: 3000,
        barColor: '#008FD5',
        trackColor: '#DCDEE0',
        scaleColor: false,
        lineWidth: 6,
        trackWidth: 6,
        lineCap: 'butt',
        size: 150,
        onStep: function(from, to, percent) {
            this.el.children[0].innerHTML = Math.round(percent) + "%";
        }
    })
    var chart2 = window.chart = new EasyPieChart(document.querySelector('#chart-2'), {
        easing: 'easeOutElastic',
        delay: 3000,
        barColor: '#008FD5',
        trackColor: '#DCDEE0',
        scaleColor: false,
        lineWidth: 6,
        trackWidth: 6,
        lineCap: 'butt',
        size: 150,
        onStep: function(from, to, percent) {
            this.el.children[0].innerHTML = Math.round(percent) + "%";
        }
    })
    var chart3 = window.chart = new EasyPieChart(document.querySelector('#chart-3'), {
        easing: 'easeOutElastic',
        delay: 3000,
        barColor: '#008FD5',
        trackColor: '#DCDEE0',
        scaleColor: false,
        lineWidth: 6,
        trackWidth: 6,
        lineCap: 'butt',
        size: 150,
        onStep: function(from, to, percent) {
            this.el.children[0].innerHTML = Math.round(percent) + "%";
        }
    })
});