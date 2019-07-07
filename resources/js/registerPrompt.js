    let deferredPrompt;

    console.log('okk');

    window.addEventListener("beforeinstallprompt", (e) => {
        // e.preventDefault();
        deferredPrompt = e;
        return false;
    });

    registerPromt = () => {

        if (deferredPrompt) {
        deferredPrompt.prompt();

        deferredPrompt.userChoice.then(function (choiceResult) {
            console.log(choiceResult.outcome);

            if (choiceResult.outcome === 'dismissed') {
            console.log('User cancelled installation');
            } else {
            console.log('User added to home screen');
            }
        });

        deferredPrompt = null;
        }
    }
