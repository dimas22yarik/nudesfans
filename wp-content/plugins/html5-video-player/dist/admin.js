(()=>{var t;(t=jQuery)(document).ready((function(){t(document).on("click",".h5vp_front_shortcode input",(function(o){o.preventDefault();var e=t(this).parent().find("input")[0];e.select(),e.setSelectionRange(0,30),document.execCommand("copy"),t(this).parent().find(".htooltip").text("Copied Successfully!")})),t(document).on("mouseout",".h5vp_front_shortcode input",(function(){t(this).parent().find(".htooltip").text("Copy To Clipboard")}))}))})();