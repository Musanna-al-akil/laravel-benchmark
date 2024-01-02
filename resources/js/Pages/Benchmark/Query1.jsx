import { Head } from '@inertiajs/react';

export default function Query1({ data }) {
    return (
        <>
            <Head title="Dashboard" />
            <h1>hello</h1>
            <h1>{data.name}</h1>
            <h1>{data.first_name}</h1>
            <h1>{data.last_name}</h1>
            <h1>{data.age}</h1>
            <h1>{(JSON.parse(data.json))[0]}</h1>
        </>
    );
}
