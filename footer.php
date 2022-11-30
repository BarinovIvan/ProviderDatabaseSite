<footer>
	<div class="container">
		<div class="footer__logo">
			<img src="./assets/images/greeting/icon.png" alt="Логотип">
		</div>
		<div class="button"><a href="tel:+7989555664">Позвоните нам!</a></div>
        <div class="active" style="display: none"></div>
	</div>
</footer>
</main>
<script>
    async function $http(API, data) {
        return await fetch(API, {
            method: 'POST',
            headers: {
                "Content-Type": "application/json;charset=utf-8"
            },
            body: JSON.stringify({
                route_name: data
            })
        }).then(res => res.json())
    }
    async function $httpForInsert(API, database, data) {
        return await fetch(API, {
            method: 'POST',
            headers: {
                "Content-Type": "application/json;charset=utf-8"
            },
            body: JSON.stringify({
                route_name: database,
                insertData: data
            })
        }).then(res => res.json())
    }
</script>
</body>
</html>
