let timers = {};

exports.startTimer = function(key, total, callback, finishCallback) {
    timers[key] = {
        intv: null,
        total: total,
        start: Math.floor(Date.now()/1000)
    };
    timers[key].intv = setInterval(function() {
        let elapsed = Math.floor(Date.now()/1000) - timers[key].start;

        callback({
            elapsed: elapsed,
            remaining: timers[key].total - elapsed
        });

        if (elapsed >= timers[key].total) {
            clearInterval(timers[key].intv);
            finishCallback();
        }
    }, 1000);
};

exports.stopTimer = function(key) {
    clearInterval(timers[key].intv);
}