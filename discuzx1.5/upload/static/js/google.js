/*
	[Discuz!] (C)2001-2009 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: google.js 17172 2010-09-25 08:17:48Z zhangguosheng $
	Modified by Valery Votintsev
*/

document.writeln('<script type="text/javascript">');
document.writeln('function validate_google(theform) {');
document.writeln('	if(theform.site.value == 1) {');
document.writeln('		theform.q.value = \'site:' + google_host + ' \' + theform.q.value;');
document.writeln('	}');
document.writeln('}');
document.writeln('function submitFormWithChannel(channelname) {');
document.writeln('	document.gform.channel.value=channelname;');
document.writeln('	document.gform.submit();');
document.writeln('	return;');
document.writeln('}');
document.writeln('</script>');
document.writeln('<form name="gform" id="gform" method="get" autocomplete="off" action="http://www.google.com/search?" target="_blank" onSubmit="validate_google(this);">');
document.writeln('<input type="hidden" name="client" value="' + (!google_client ? 'aff-discuz' : google_client) + '" />');
document.writeln('<input type="hidden" name="ie" value="' + google_charset + '" />');
document.writeln('<input type="hidden" name="oe" value="UTF-8" />');
document.writeln('<input type="hidden" name="hl" value="' + google_hl + '" />');
document.writeln('<input type="hidden" name="lr" value="' + google_lr + '" />');
document.writeln('<input type="hidden" name="channel" value="search" />');
document.write('<div onclick="javascript:submitFormWithChannel(\'logo\')" style="cursor:pointer;float: left;width:70px;height:23px;background: url(' + STATICURL + 'image/common/Google_small.png) !important;background: none;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src=\'' + STATICURL+ 'image/common/Google_small.png\', sizingMethod=\'scale\')"><img src="' + STATICURL + 'image/common/none.gif" border="0" alt="Google" /></div>');
document.writeln('&nbsp;&nbsp;<input type="text" class="txt" size="20" name="q" id="q" maxlength="255" value=""></input>');
document.writeln('<select name="site">');
/*vot*/ document.writeln('<option value="0"' + google_default_0 + '>'+lng['search_net']+'</option>');
/*vot*/ document.writeln('<option value="1"' + google_default_1 + '>'+lng['search_site']+'</option>');
document.writeln('</select>');
/*vot*/ document.writeln('&nbsp;<button type="submit" name="sa" value="true">'+lng['search']+'</button>');
document.writeln('</form>');