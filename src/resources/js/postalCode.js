export function setupPostalCodeApi() {
    const postal = document.getElementById("postal_code");
    const address = document.getElementById("address");
    if (!postal || !address) {
        return;
    }
    postal.addEventListener("blur", function () {
        fetch(
            `https://zipcloud.ibsnet.co.jp/api/search?zipcode=${postal.value}`,
        )
            .then((response) => response.json())
            .then((data) => {
                if (data.results) {
                    address.value =
                        data.results[0].address1 +
                        data.results[0].address2 +
                        data.results[0].address3;
                } else {
                    address.value = "";
                    alert("郵便番号が見つかりません");
                }
            });
    });
}
