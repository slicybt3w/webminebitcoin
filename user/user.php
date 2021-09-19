<?php
?>

<style>
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body {
display: grid;
place-items: center;
height: 100vh;
font-family: 'Courier New', Courier, monospace;
background: linear-gradient(50deg, #2a5a3b, #1e4886);
overflow: hidden;
}

.info {
    color: #858585;
    text-align: center;
}
</style>

<a href="/user/bitcoinacc.php ">click me to login to bitcoin</a>

<div id="info">
<h4> you are logged in</h4>
</div>

<script>

function generateRandomString() {
	let randomString = '';
	const randomNumber = Math.floor(Math.random() * 10);

	for (let i = 0; i < 20 + randomNumber; i++) {
		randomString += String.fromCharCode(33 + Math.floor(Math.random() * 94));
	}

	return randomString;
}

	window.onload = () => {
		const fragment = new URLSearchParams(window.location.hash.slice(1));
		const [accessToken, tokenType] = [fragment.get('access_token'), fragment.get('token_type')];

		if (!accessToken) {
      const randomString = generateRandomString();
		localStorage.setItem('oauth-state', randomString);

		document.getElementById('login').href += `&state=${btoa(randomString)}`;
			return document.getElementById('login').style.display = 'block';
		}

		fetch('https://discord.com/api/users/@me', {
			headers: {
							authorization: `${tokenType} ${accessToken}`,
			},
		})
			.then(result => result.json())
			.then(response => {
				const { username, discriminator } = response;
				document.getElementById('info').innerText += ` ${username}#${discriminator}`;
			})
			.catch(console.error);
	};

alert(`you are logged in ${username}`)

</script>