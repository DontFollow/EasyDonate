<?php namespace DontFollow\Shop\Middlewares; use Cache; use Session; use Closure; use Response; use Exception; class HasCart { public function handle($ipHGQ, Closure $oMy3R) { goto vBBNr; l6oaJ: return Response::json(["\163\164\141\x74\165\x73" => false, "\x6d\145\163\163\x61\147\x65" => "\xd0\243\x20\xd0\x92\xd0\xb0\xd1\x81\x20\xd0\xbd\320\265\xd1\202\x20\xd0\273\xd0\270\321\x86\xd0\xb5\xd0\xbd\320\xb7\xd0\270\320\xb8\56"]); goto xREtL; vBBNr: $pkDtk = "\150\164\x74\x70\72\57\57\x65\141\163\171\x64\x6f\156\x61\164\x65\x2e\x72\165\57\141\160\151\57\x76\62\x2f\154\151\143\x65\156\163\145\x2f\x63\x68\x65\143\153"; goto w9wxM; ZFXqI: powwr: goto l6oaJ; w9wxM: $SOL7D = http_build_query(config("\143\x72\145\x64\x65\x6e\164\x69\x61\154\x73")); goto CcR2x; L4B6O: return $oMy3R($ipHGQ); goto ZFXqI; HI1Ei: if (!(isset($HDnjw->status) && $HDnjw->status === true)) { goto powwr; } goto L4B6O; CcR2x: try { $HDnjw = Cache::remember("\143\x61\x72\x74", 2880, function () use($pkDtk, $SOL7D) { return file_get_contents(implode("\x3f", [$pkDtk, $SOL7D])); }); $HDnjw = json_decode($HDnjw); } catch (Exception $HxuVW) { return Response::json(["\x73\x74\141\x74\165\x73" => false, "\x6d\145\x73\163\141\x67\145" => $HxuVW->getMessage()]); } goto HI1Ei; xREtL: } }