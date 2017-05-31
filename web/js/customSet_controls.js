/**
 * Created by khabibulines on 26.05.2017.
 */
ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {
        center: [55.796992, 49.134027],
        zoom: 11,
        controls: ['zoomControl', 'geolocationControl', 'typeSelector', 'fullscreenControl']

        }, {
            searchControlProvider: 'yandex#search'
        });

    myMap.geoObjects

        .add(new ymaps.Placemark([55.792942, 49.125893], {
            balloonContent: 'цвет <strong>воды пляжа бонди</strong>',
            iconCaption: 'Доктор тут'
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }))
        .add(new ymaps.Placemark([55.792942, 49.125893], {
            balloonContent: '<strong>серобуромалиновый</strong> цвет',
            iconCaption: 'Айболит'
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }))
        .add(new ymaps.Placemark([55.783463, 49.221680], {
            balloonContent: 'цвет <strong>влюбленной жабы</strong>',
            iconCaption: 'Многопрофильная клиника МЕДЕЛ'
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }))
        .add(new ymaps.Placemark([55.820592, 49.135506], {
            balloonContent: 'цвет <strong>детской неожиданности</strong>',
            iconCaption: 'Medical on group'
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }))
        .add(new ymaps.Placemark([55.813439, 49.080918], {
            balloonContent: 'цвет <strong>красный</strong>',
            iconCaption: 'Гауз РКБ МЗ РТ'
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }))
        .add(new ymaps.Placemark([55.775530, 49.149583], {
            balloonContent: 'цвет <strong>фэйсбука</strong>',
            iconCaption: 'Медикал Он Груп - Казань'
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }))
        .add(new ymaps.Placemark([55.780368, 49.110787], {
            balloonContent: 'цвет <strong>носика Гены</strong>',
            iconCaption: 'Медицинский центр Артиум'
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }))
        .add(new ymaps.Placemark([55.818465, 49.097398], {
            balloonContent: 'цвет <strong>голубой</strong>',
            iconCaption: '"Ам Медика"'
        }, {
            preset: 'islands#greenDotIconWithCaption'
        }));
});
