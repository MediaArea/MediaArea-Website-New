---
title:  "Why we changed MediaConch's license"
date:   2018-03-20 11:00:00 CET
excerpt: "We explain the reasons behind the license change of MediaConch."
tags: MediaConch, License
---

# Why we changed MediaConch's license.

During [PREFORMA project](http://www.preforma-project.eu/), we\* had several discussions
about the licensing of [MediaConch](https://mediaarea.net/MediaConch), which was 100% funded by PREFORMA.

Sometimes it was hard. Some historical context: PREFORMA is a consortium, with a lot of different people from different countries and different backgrounds. Some of these people insisted for having a [copyleft license](https://en.wikipedia.org/wiki/Copyleft) for the project. The license of the project was [GPLv3](https://en.wikipedia.org/wiki/GNU_General_Public_License) and [MPLv2](https://en.wikipedia.org/wiki/Mozilla_Public_License). Initially these licenses were also mandatory for any software library we would use in MediaConch as a dependency. If you know about open source licensing, you can guess the origin of a (not-so-small) problem… it would have meant that nearly no software library would have been usable, so we would have had to develop everything, including some features like a database, an XML parser, et cetera, completely "from scratch"… when these features are already covered by well known open source libraries. Lot of open source libraries exist but would not be usable because the license was “wrong". We would have pulled ourselves out of the open source ecosystem -- if we were to say to open source advocates that we can’t use a software library because it is BSD/MIT/Apache licensed, we would get strange looks from our peers in open source communities. At this early design and proposal phase during the PREFORMA project, we were 6 organizations in competition with each other, to win the bid to develop the file format validation software. All six competitors agreed to send a common letter about this unnecessary license restriction. The response was that we could use third party open source libraries for “non-core" features, and this crisis was averted (phew).



On our side, we were not able to offer more freedom to the people who would be using or developing on top of the tool, including the freedom to use the tool in a closed source software, as we initially planned by reusing [MediaInfo](https://mediaarea.net/MediaInfo) and were willing to use the same license. We were aware of the “war" between [Copyleft](https://en.wikipedia.org/wiki/Copyleft) and [Copyfree](https://en.wikipedia.org/wiki/Copyfree) (a.k.a. permissive) licensing, so due to this issue we would have to develop something that already exists only because the license is “only" compatible with the request and not exactly the request. But we are lucky, for MediaInfo we request a Contributor License Agreement. So we can change the license, and this is what we did. We "forked" MediaInfo with only one change, the license, and people are happy. (Later we also had to remove all non MKV/FFV1 related stuff, but this is a story maybe for a future dedicated blog post)

We did not understand why this license change unblocked things, as we still own the copyright so it is obvious that this constraint was only temporary.

The PREFORMA project is now finished. The agreement we had is over (since December 31, 2017). There is no long term agreement about the license of MediaConch and we own the copyright. We don't want someone to be blocked due to an incompatibility with the license, so we will release MediaConch with the license we usually use, that’s all.

OK, not exactly "that’s all": The reason we choose to publish with a permissive license is that we don’t like to constrain anyone: we want to convince everyone that open source is the way to go. From our point of view, you should choose open source because you are convinced that this is the best method, not because you are forced to due to the license. We also want you choose us because you think we are the best for doing the job :), not because we block others. For PREFORMA, we were the only ones able to relicense MediaInfo for complying with PREFORMA constraints, and this is something we were not comfortable with. We changed the license to the one we usually use and we explicitly authorize you to reuse our code for projects requiring a specific license that would permit anyone to have the same right as us when applying to a Call for Proposals requiring a specific license. MediaConch (as well as MediaInfo) are now available as your choice: under a BSD 2-Clause license (the “default" license), and/or Apache License, and/or GNU Lesser General Public License 2.1 or later (which can be transformed to nearly any modern GNU license), and/or GNU General Public License 2.0 or later, and/or Mozilla Public License 2.0 and/or later.

Note that we still limit to a set of licenses. First because we have some ego and still want to inform people that we developed it (the only requirement we have is that you name us) so no public domain style licenses e.g. [CC0](https://creativecommons.org/publicdomain/zero/1.0/) or [Unlicense](https://unlicense.org/), and second because we are against the [License proliferation](https://en.wikipedia.org/wiki/License_proliferation) phenomenon. That said, we could consider any other license depending on the needs you have.

\* MediaArea is a team, “we" does not mean that all members individually agree on all.