import http from 'k6/http';
import { check, group, sleep } from 'k6';


export let options = {
   stages: [
    { duration: '30s', target: 100 }, 
    { duration: '30s', target: 100 }, 
    { duration: '30s', target: 200 }, 
    { duration: '30s', target: 200 }, 
    { duration: '30s', target: 300 }, 
    { duration: '30s', target: 300 }, 
    { duration: '30s', target: 0 },
  ],
};


export default function () {
  // our HTTP request, note that we are saving the response to res, which can be accessed later

    const res = http.get('http://localhost:8000/api/slow/movies');

  const checkRes = check(res, {
    'status is 200': (r) => r.status === 200,
  });
  
    sleep(1);

}
