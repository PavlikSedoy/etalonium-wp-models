// Swiper Class
import Swiper from '../../../../Downloads/swiper-4.4.1/src/components/core/core-class';

// Core Modules
import Device from '../../../../Downloads/swiper-4.4.1/src/modules/device/device';
import Support from '../../../../Downloads/swiper-4.4.1/src/modules/support/support';
import Browser from '../../../../Downloads/swiper-4.4.1/src/modules/browser/browser';
import Resize from '../../../../Downloads/swiper-4.4.1/src/modules/resize/resize';
import Observer from '../../../../Downloads/swiper-4.4.1/src/modules/observer/observer';

//IMPORT_COMPONENTS

const components = [
  Device,
  Support,
  Browser,
  Resize,
  Observer,
  //INSTALL_COMPONENTS
];

if (typeof Swiper.use === 'undefined') {
  Swiper.use = Swiper.Class.use;
  Swiper.installModule = Swiper.Class.installModule;
}

Swiper.use(components);

//EXPORT
