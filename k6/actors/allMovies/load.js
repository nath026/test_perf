import http from 'k6/http';
import { check, group, sleep } from 'k6';


export let options = {
   stages: [
    { duration: '30s', target: 50 }, 
    { duration: '30s', target: 50 }, 
    { duration: '30s', target: 100 }, 
    { duration: '30s', target: 100 }, 
    { duration: '30s', target: 150 }, 
    { duration: '30s', target: 150 }, 
    { duration: '30s', target: 0 },
  ],
  thresholds: {
    http_req_duration: ['p(99)<5000','p(95)<1500'], // 99% of requests must complete below 1.5s
  },
};


export default function () {
  // our HTTP request, note that we are saving the response to res, which can be accessed later

    const res = http.get('http://localhost:8000/api/allMovies');

  const checkRes = check(res, {
    'status is 200': (r) => r.status === 200,
  });
  
    sleep(1);
}

