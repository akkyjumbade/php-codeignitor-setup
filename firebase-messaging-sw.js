importScripts('https://www.gstatic.com/firebasejs/4.4.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/4.4.0/firebase-messaging.js');

// Firebase messing [starts here]
// var firebaseConfig = {
//    apiKey: "AIzaSyAEEh5_wfTEqZ8-NYHts-0dJOrquFH9sFU",
//    // authDomain: "creativewavetech-panel.firebaseapp.com",
//    // databaseURL: "https://creativewavetech-panel.firebaseio.com",
//    // projectId: "creativewavetech-panel",
//    // storageBucket: "creative-insiders.appspot.com",
//    messagingSenderId: "841914694258",
//    appId: "1:841914694258:web:e22c6d13d573a63bf160eb"
// };
// firebase.initializeApp(firebaseConfig);
// const messaging = firebase.messaging();
// messaging.setBackgroundMessageHandler(function(payload) {
//    console.log(payload)
//    const {notification} = payload
//    const notify = self.registration.showNotification(notification.title, {
//       ...notification,
//       icon: '/assets/images/icon.png',
//       badge: '/assets/images/icons/128x128.png',
//       vibrate: [200, 100, 200],
//       silent: false,
//       sound: '/assets/music/beyond-doubt.mp3',
//    });
//    notify.onclick = event => {
//       event.preventDefault()
//       const tag = notification.tag ? notification.tag: 'undefined';
//       clients.openWindow('/index.php/welcome?ref=push_notification&tag='+tag)
//       return
//    }
//    return notify
// });
// Firebase messing [ends here]
// https://medium.com/dev-channel/learn-how-to-build-a-pwa-in-under-5-minutes-c860ad406ed
