const routes = require('./routes.json');

export  default function (...arg) {
    // let arg = Array.prototype.slice.call(arg);
    let args = arg;
    let name = args.shift();
    if (routes[name] === undefined){
        console.log('Error');
    }
    else if(routes[name] === '/'){
        return '/';
    }
    else{
        return '/' +
            routes[name].split('/')
                .map(str => str[0] == '{' ? args.shift(): str)
                .join('/');
    }

}
