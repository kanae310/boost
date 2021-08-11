import Link from 'next/link'
import React, { useState, useEffect } from 'react'

const url = "http://localhost/api/user";

export default function User() {

    const [pser, setUser] = useState([]);

    useEffect(() => {
        const response = fetch(url)
            .then((res) => {
                if (!res.ok) {
                    throw new Error(`${res.status} ${res.statusText}`);
                }

                return res.json()
                    .then(
                        value => setUser(value.data))
            })
            .catch((reason) => {
                console.log(reason);
            });

        return () => {
            console.log("OK");
        };
    }, []);

    let list = [];
    for(let i in pser){
        list.push(<li>{pser[i]}</li>);
    }

    return (
        <>
            <h1>user</h1>
            <ul>
                {list}
            </ul>
            <h2>
                <Link href="/">
                    <a>Back to home</a>
                </Link>
            </h2>
        </>
    )
}
