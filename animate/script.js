angular.module('website', ['ngAnimate'])
    .controller('MainCtrl', function ($scope) {
        $scope.slides = [
            {bg: '', avatar: 'https://www.technipages.com/wp-content/uploads/2019/07/Cover-600x371.jpg', title: 'SUDHA - WARDEN', subtitle: '9442612525      sudha@hostel.admin'},
            {bg: '', avatar: 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg', title: 'TUNA - MESS', subtitle: '9442612525      tuna@hostel.admin'},
            {bg: '', avatar: 'https://cdn.pixabay.com/photo/2018/10/30/16/06/water-lily-3784022__480.jpg', title: 'AMALA - MATRON', subtitle: '9159248240 amla@hostel.admin'},
            {bg: '', avatar: 'https://www.gettyimages.com/gi-resources/images/500px/983794168.jpg', title: 'MANSHI - MATRON', subtitle: '7891236748 manshi@hostel.admin'}
        ];

        $scope.direction = 'left';
        $scope.currentIndex = 0;

        $scope.setCurrentSlideIndex = function (index) {
            $scope.direction = (index > $scope.currentIndex) ? 'left' : 'right';
            $scope.currentIndex = index;
        };

        $scope.isCurrentSlideIndex = function (index) {
            return $scope.currentIndex === index;
        };
    })
  ;