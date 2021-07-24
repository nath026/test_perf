import http from 'k6/http';
import { check, group, sleep } from 'k6';


export let options = {
   stages: [
    { duration: '10s', target: 50 }, // below normal load
    { duration: '1m', target: 50 },
    { duration: '10s', target: 600 }, // spike to 1000 users
    { duration: '1m30s', target: 600 }, // stay at 300 for 3 minutes
    { duration: '10s', target: 50 }, // scale down. Recovery stage.
    { duration: '10s', target: 50 },
    { duration: '10s', target: 0 },
  ],
};


export default function () {

    const res = http.get('http://localhost:8000/api/allMovies');
    console.log(JSON.stringify(res));

  const checkRes = check(res, {
    'status is 200': (r) => r.status === 200,
  });
  
    sleep(1);

}
