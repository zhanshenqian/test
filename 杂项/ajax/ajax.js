function ajax(method, url, data, callback) {
            var xhr = null;
            if (window.ActiveXObject) {
                xhr = new ActiveXObject('Microsoft.XMLHTTP');
            } else {
                xhr = new XMLHttpRequest();
            }

            xhr.onreadystatechange = function() {

                if (xhr.readyState == 4) {

                    if (xhr.status == 200) {

                        callback && callback(xhr.responseText);

                    }

                }

            };

            if (method == 'post') {

                xhr.open(method, url,true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send(encodeURI(data));

            } else {

                xhr.open(method, url + '?' + encodeURI(data));
                xhr.send(null);

            }

        }