def player(prev_play, opponent_history=[], play_order=[{key: 0 for key in (
    "RRRRR", "RRPRR", "RRSRR", "RRRRP", "RRPRP", "RRSRP", "RRRRS", "RRPRS", "RRSRS",
    "RRRPR", "RRPPR", "RRSPR", "RRRPP", "RRPPP", "RRSPP", "RRRPS", "RRPPS", "RRSPS",
    "RRRSR", "RRPSR", "RRSSR", "RRRSP", "RRPSP", "RRSSP", "RRRSS", "RRPSS", "RRSSS",
    "RPRRR", "RPPRR", "RPSRR", "RPRRP", "RPPRP", "RPSRP", "RPRRS", "RPPRS", "RPSRS",
    "RPRPR", "RPPPR", "RPSPR", "RPRPP", "RPPPP", "RPSPP", "RPRPS", "RPPPS", "RPSPS",
    "RPRSR", "RPPSR", "RPSSR", "RPRSP", "RPPSP", "RPSSP", "RPRSS", "RPPSS", "RPSSS",
    "RSRRR", "RSPRR", "RSSRR", "RSRRP", "RSPRP", "RSSRP", "RSRRS", "RSPRS", "RSSRS",
    "RSRPR", "RSPPR", "RSSPR", "RSRPP", "RSPPP", "RSSPP", "RSRPS", "RSPPS", "RSSPS",
    "RSRSR", "RSPSR", "RSSSR", "RSRSP", "RSPSP", "RSSSP", "RSRSS", "RSPSS", "RSSSS",
    "PRRRR", "PRPRR", "PRSRR", "PRRRP", "PRPRP", "PRSRP", "PRRRS", "PRPRS", "PRSRS",
    "PRRPR", "PRPPR", "PRSPR", "PRRPP", "PRPPP", "PRSPP", "PRRPS", "PRPPS", "PRSPS",
    "PRRSR", "PRPSR", "PRSSR", "PRRSP", "PRPSP", "PRSSP", "PRRSS", "PRPSS", "PRSSS",
    "PPRRR", "PPPRR", "PPSRR", "PPRRP", "PPPRP", "PPSRP", "PPRRS", "PPPRS", "PPSRS",
    "PPRPR", "PPPPR", "PPSPR", "PPRPP", "PPPPP", "PPSPP", "PPRPS", "PPPPS", "PPSPS",
    "PPRSR", "PPPSR", "PPSSR", "PPRSP", "PPPSP", "PPSSP", "PPRSS", "PPPSS", "PPSSS",
    "PSRRR", "PSPRR", "PSSRR", "PSRRP", "PSPRP", "PSSRP", "PSRRS", "PSPRS", "PSSRS",
    "PSRPR", "PSPPR", "PSSPR", "PSRPP", "PSPPP", "PSSPP", "PSRPS", "PSPPS", "PSSPS",
    "PSRSR", "PSPSR", "PSSSR", "PSRSP", "PSPSP", "PSSSP", "PSRSS", "PSPSS", "PSSSS",
    "SRRRR", "SRPRR", "SRSRR", "SRRRP", "SRPRP", "SRSRP", "SRRRS", "SRPRS", "SRSRS",
    "SRRPR", "SRPPR", "SRSPR", "SRRPP", "SRPPP", "SRSPP", "SRRPS", "SRPPS", "SRSPS",
    "SRRSR", "SRPSR", "SRSSR", "SRRSP", "SRPSP", "SRSSP", "SRRSS", "SRPSS", "SRSSS",
    "SPRRR", "SPPRR", "SPSRR", "SPRRP", "SPPRP", "SPSRP", "SPRRS", "SPPRS", "SPSRS",
    "SPRPR", "SPPPR", "SPSPR", "SPRPP", "SPPPP", "SPSPP", "SPRPS", "SPPPS", "SPSPS",
    "SPRSR", "SPPSR", "SPSSR", "SPRSP", "SPPSP", "SPSSP", "SPRSS", "SPPSS", "SPSSS",
    "SSRRR", "SSPRR", "SSSRR", "SSRRP", "SSPRP", "SSSRP", "SSRRS", "SSPRS", "SSSRS",
    "SSRPR", "SSPPR", "SSSPR", "SSRPP", "SSPPP", "SSSPP", "SSRPS", "SSPPS", "SSSPS",
    "SSRSR", "SSPSR", "SSSSR", "SSRSP", "SSPSP", "SSSSP", "SSRSS", "SSPSS", "SSSSS",
)}]):

    if not prev_play:
        prev_play = "S"
    opponent_history.append(prev_play)

    last_five = "".join(opponent_history[-5:])
    if len(last_five) == 5:
        play_order[0][last_five] += 1

    last_four = "".join(opponent_history[-4:])
    potential_plays = [last_four + "R", last_four + "P", last_four + "S"]

    sub_order = {k: play_order[0].get(k, 0) for k in potential_plays}

    prediction = "P" if len(last_five) != 5 else max(sub_order, key=sub_order.get, default="P")[-1:]

    ideal_response = {'P': 'S', 'R': 'P', 'S': 'R'}
    return ideal_response[prediction]
