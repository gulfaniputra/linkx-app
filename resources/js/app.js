import axios from "axios";
import "./bootstrap";

$(".user-link").click(function (e) {
    var linkId = $(this).data("link-id");
    var linkUrl = $(this).attr("href");

    axios
        .post("/visit/ +" + linkId, {
            link: linkUrl,
        })

        .then((response) => console.log("response: ", response))
        .catch((error) => console.log("error: ", error));
});
