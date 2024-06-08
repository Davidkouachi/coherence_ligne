! function(t, e) { "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = "undefined" != typeof globalThis ? globalThis : t || self).Chart = e() }(this, (function() {
            "use strict";
            var t = Object.freeze({ __proto__: null, get Colors() { return Go }, get Decimation() { return Qo }, get Filler() { return ma }, get Legend() { return ya }, get SubTitle() { return ka }, get Title() { return Ma }, get Tooltip() { return Ba } });

            function e() {}
            const i = (() => { let t = 0; return () => t++ })();

            function s(t) { return null == t }

            function n(t) { if (Array.isArray && Array.isArray(t)) return !0; const e = Object.prototype.toString.call(t); return "[object" === e.slice(0, 7) && "Array]" === e.slice(-6) }

            function o(t) { return null !== t && "[object Object]" === Object.prototype.toString.call(t) }

            function a(t) { return ("number" == typeof t || t instanceof Number) && isFinite(+t) }

            function r(t, e) { return a(t) ? t : e }

            function l(t, e) { return void 0 === t ? e : t }
            const h = (t, e) => "string" == typeof t && t.endsWith("%") ? parseFloat(t) / 100 : +t / e,
                c = (t, e) => "string" == typeof t && t.endsWith("%") ? parseFloat(t) / 100 * e : +t;

            function d(t, e, i) { if (t && "function" == typeof t.call) return t.apply(i, e) }

            function u(t, e, i, s) { let a, r, l; if (n(t))
                    if (r = t.length, s)
                        for (a = r - 1; a >= 0; a--) e.call(i, t[a], a);
                    else
                        for (a = 0; a < r; a++) e.call(i, t[a], a);
                else if (o(t))
                    for (l = Object.keys(t), r = l.length, a = 0; a < r; a++) e.call(i, t[l[a]], l[a]) }

            function f(t, e) { let i, s, n, o; if (!t || !e || t.length !== e.length) return !1; for (i = 0, s = t.length; i < s; ++i)
                    if (n = t[i], o = e[i], n.datasetIndex !== o.datasetIndex || n.index !== o.index) return !1; return !0 }

            function g(t) { if (n(t)) return t.map(g); if (o(t)) { const e = Object.create(null),
                        i = Object.keys(t),
                        s = i.length; let n = 0; for (; n < s; ++n) e[i[n]] = g(t[i[n]]); return e } return t }

            function p(t) { return -1 === ["__proto__", "prototype", "constructor"].indexOf(t) }

            function m(t, e, i, s) { if (!p(t)) return; const n = e[t],
                    a = i[t];
                o(n) && o(a) ? b(n, a, s) : e[t] = g(a) }

            function b(t, e, i) { const s = n(e) ? e : [e],
                    a = s.length; if (!o(t)) return t; const r = (i = i || {}).merger || m; let l; for (let e = 0; e < a; ++e) { if (l = s[e], !o(l)) continue; const n = Object.keys(l); for (let e = 0, s = n.length; e < s; ++e) r(n[e], t, l, i) } return t }

            function x(t, e) { return b(t, e, { merger: _ }) }

            function _(t, e, i) { if (!p(t)) return; const s = e[t],
                    n = i[t];
                o(s) && o(n) ? x(s, n) : Object.prototype.hasOwnProperty.call(e, t) || (e[t] = g(n)) }
            const y = { "": t => t, x: t => t.x, y: t => t.y };

            function v(t) { const e = t.split("."),
                    i = []; let s = ""; for (const t of e) s += t, s.endsWith("\\") ? s = s.slice(0, -1) + "." : (i.push(s), s = ""); return i }

            function M(t, e) { const i = y[e] || (y[e] = function(t) { const e = v(t); return t => { for (const i of e) { if ("" === i) break;
                            t = t && t[i] } return t } }(e)); return i(t) }

            function w(t) { return t.charAt(0).toUpperCase() + t.slice(1) }
            const k = t => void 0 !== t,
                S = t => "function" == typeof t,
                P = (t, e) => { if (t.size !== e.size) return !1; for (const i of t)
                        if (!e.has(i)) return !1; return !0 };

            function D(t) { return "mouseup" === t.type || "click" === t.type || "contextmenu" === t.type }
            const C = Math.PI,
                O = 2 * C,
                A = O + C,
                T = Number.POSITIVE_INFINITY,
                L = C / 180,
                E = C / 2,
                R = C / 4,
                I = 2 * C / 3,
                z = Math.log10,
                F = Math.sign;

            function V(t, e, i) { return Math.abs(t - e) < i }

            function B(t) { const e = Math.round(t);
                t = V(t, e, t / 1e3) ? e : t; const i = Math.pow(10, Math.floor(z(t))),
                    s = t / i; return (s <= 1 ? 1 : s <= 2 ? 2 : s <= 5 ? 5 : 10) * i }

            function W(t) { const e = [],
                    i = Math.sqrt(t); let s; for (s = 1; s < i; s++) t % s == 0 && (e.push(s), e.push(t / s)); return i === (0 | i) && e.push(i), e.sort(((t, e) => t - e)).pop(), e }

            function N(t) { return !isNaN(parseFloat(t)) && isFinite(t) }

            function H(t, e) { const i = Math.round(t); return i - e <= t && i + e >= t }

            function j(t, e, i) { let s, n, o; for (s = 0, n = t.length; s < n; s++) o = t[s][i], isNaN(o) || (e.min = Math.min(e.min, o), e.max = Math.max(e.max, o)) }

            function $(t) { return t * (C / 180) }

            function Y(t) { return t * (180 / C) }

            function U(t) { if (!a(t)) return; let e = 1,
                    i = 0; for (; Math.round(t * e) / e !== t;) e *= 10, i++; return i }

            function X(t, e) { const i = e.x - t.x,
                    s = e.y - t.y,
                    n = Math.sqrt(i * i + s * s); let o = Math.atan2(s, i); return o < -.5 * C && (o += O), { angle: o, distance: n } }

            function q(t, e) { return Math.sqrt(Math.pow(e.x - t.x, 2) + Math.pow(e.y - t.y, 2)) }

            function K(t, e) { return (t - e + A) % O - C }

            function G(t) { return (t % O + O) % O }

            function Z(t, e, i, s) { const n = G(t),
                    o = G(e),
                    a = G(i),
                    r = G(o - n),
                    l = G(a - n),
                    h = G(n - o),
                    c = G(n - a); return n === o || n === a || s && o === a || r > l && h < c }

            function J(t, e, i) { return Math.max(e, Math.min(i, t)) }

            function Q(t) { return J(t, -32768, 32767) }

            function tt(t, e, i, s = 1e-6) { return t >= Math.min(e, i) - s && t <= Math.max(e, i) + s }

            function et(t, e, i) { i = i || (i => t[i] < e); let s, n = t.length - 1,
                    o = 0; for (; n - o > 1;) s = o + n >> 1, i(s) ? o = s : n = s; return { lo: o, hi: n } }
            const it = (t, e, i, s) => et(t, i, s ? s => { const n = t[s][e]; return n < i || n === i && t[s + 1][e] === i } : s => t[s][e] < i),
                st = (t, e, i) => et(t, i, (s => t[s][e] >= i));

            function nt(t, e, i) { let s = 0,
                    n = t.length; for (; s < n && t[s] < e;) s++; for (; n > s && t[n - 1] > i;) n--; return s > 0 || n < t.length ? t.slice(s, n) : t }
            const ot = ["push", "pop", "shift", "splice", "unshift"];

            function at(t, e) { t._chartjs ? t._chartjs.listeners.push(e) : (Object.defineProperty(t, "_chartjs", { configurable: !0, enumerable: !1, value: { listeners: [e] } }), ot.forEach((e => { const i = "_onData" + w(e),
                        s = t[e];
                    Object.defineProperty(t, e, { configurable: !0, enumerable: !1, value(...e) { const n = s.apply(this, e); return t._chartjs.listeners.forEach((t => { "function" == typeof t[i] && t[i](...e) })), n } }) }))) }

            function rt(t, e) { const i = t._chartjs; if (!i) return; const s = i.listeners,
                    n = s.indexOf(e); - 1 !== n && s.splice(n, 1), s.length > 0 || (ot.forEach((e => { delete t[e] })), delete t._chartjs) }

            function lt(t) { const e = new Set(t); return e.size === t.length ? t : Array.from(e) }
            const ht = "undefined" == typeof window ? function(t) { return t() } : window.requestAnimationFrame;

            function ct(t, e) { let i = [],
                    s = !1; return function(...n) { i = n, s || (s = !0, ht.call(window, (() => { s = !1, t.apply(e, i) }))) } }

            function dt(t, e) { let i; return function(...s) { return e ? (clearTimeout(i), i = setTimeout(t, e, s)) : t.apply(this, s), e } }
            const ut = t => "start" === t ? "left" : "end" === t ? "right" : "center",
                ft = (t, e, i) => "start" === t ? e : "end" === t ? i : (e + i) / 2,
                gt = (t, e, i, s) => t === (s ? "left" : "right") ? i : "center" === t ? (e + i) / 2 : e;

            function pt(t, e, i) { const s = e.length; let n = 0,
                    o = s; if (t._sorted) { const { iScale: a, _parsed: r } = t, l = a.axis, { min: h, max: c, minDefined: d, maxDefined: u } = a.getUserBounds();
                    d && (n = J(Math.min(it(r, l, h).lo, i ? s : it(e, l, a.getPixelForValue(h)).lo), 0, s - 1)), o = u ? J(Math.max(it(r, a.axis, c, !0).hi + 1, i ? 0 : it(e, l, a.getPixelForValue(c), !0).hi + 1), n, s) - n : s - n } return { start: n, count: o } }

            function mt(t) { const { xScale: e, yScale: i, _scaleRanges: s } = t, n = { xmin: e.min, xmax: e.max, ymin: i.min, ymax: i.max }; if (!s) return t._scaleRanges = n, !0; const o = s.xmin !== e.min || s.xmax !== e.max || s.ymin !== i.min || s.ymax !== i.max; return Object.assign(s, n), o } class bt { constructor() { this._request = null, this._charts = new Map, this._running = !1, this._lastDate = void 0 } _notify(t, e, i, s) { const n = e.listeners[s],
                        o = e.duration;
                    n.forEach((s => s({ chart: t, initial: e.initial, numSteps: o, currentStep: Math.min(i - e.start, o) }))) } _refresh() { this._request || (this._running = !0, this._request = ht.call(window, (() => { this._update(), this._request = null, this._running && this._refresh() }))) } _update(t = Date.now()) { let e = 0;
                    this._charts.forEach(((i, s) => { if (!i.running || !i.items.length) return; const n = i.items; let o, a = n.length - 1,
                            r = !1; for (; a >= 0; --a) o = n[a], o._active ? (o._total > i.duration && (i.duration = o._total), o.tick(t), r = !0) : (n[a] = n[n.length - 1], n.pop());
                        r && (s.draw(), this._notify(s, i, t, "progress")), n.length || (i.running = !1, this._notify(s, i, t, "complete"), i.initial = !1), e += n.length })), this._lastDate = t, 0 === e && (this._running = !1) } _getAnims(t) { const e = this._charts; let i = e.get(t); return i || (i = { running: !1, initial: !0, items: [], listeners: { complete: [], progress: [] } }, e.set(t, i)), i } listen(t, e, i) { this._getAnims(t).listeners[e].push(i) } add(t, e) { e && e.length && this._getAnims(t).items.push(...e) } has(t) { return this._getAnims(t).items.length > 0 } start(t) { const e = this._charts.get(t);
                    e && (e.running = !0, e.start = Date.now(), e.duration = e.items.reduce(((t, e) => Math.max(t, e._duration)), 0), this._refresh()) } running(t) { if (!this._running) return !1; const e = this._charts.get(t); return !!(e && e.running && e.items.length) } stop(t) { const e = this._charts.get(t); if (!e || !e.items.length) return; const i = e.items; let s = i.length - 1; for (; s >= 0; --s) i[s].cancel();
                    e.items = [], this._notify(t, e, Date.now(), "complete") } remove(t) { return this._charts.delete(t) } }
            var xt = new bt;
