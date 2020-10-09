select uni.UNI_UnidadeId, uni.UNI_UnidadeApelido as unidade, uni.UNI_UnidadeNome as unidadenome,
uni.UNI_UnidadeNomeSimplificado as unidadesimplificada,rce.GER_RegiaoCESUCod, rce.GER_RegiaoCESUNome as nucleo, alc.ACD_AlunoId,alc.ACD_AlunoCursoIndicePP as pp,alc.ACD_AlunoCursoIndicePR as pr,
alc.GER_TipoSituacaoCursoId as situacaoid,sic.GER_TipoSituacaoCursoDescricao as situacao,
alc.ACD_AlunoCursoIngressanteFlag as flagi,alc.ACD_AlunoCursoFlagIngressanteAE as flagae,
alc.ACD_AlunoCursoPeriodoOferecimentoIngresso as ingresso,alc.ACD_AlunoCursoRegistroAcademicoCurso as ra,alc.ACD_AlunoCursoSemestresEfetivamenteCursados as semestrescursados,
alc.ACD_AlunoCursoPrazoIntegralizacao as prazointegralizacao,alc.ACD_AlunoCursoPrazoIntegralizacaoMax as prazomax,alc.ACD_AlunoCursoPrazoIntegralizacaoMin as prazomin,alc.ACD_AlunoCursoCicloAtual as ciclo,pes.PRO_PessoalNome as nome,sex.GER_TipoSexoDescricao AS sexo,
eix.ACD_EixoTecnologicoId,eix.ACD_EixoTecnologicoTitulo as eixo,
cur.ACD_CursoId, cur.ACD_CursoApelido as curso, cur.ACD_CursoNome as cursonome,
per.ACD_PeriodoId, per.ACD_PeriodoDescricao as turno
from ACD_AlunoCurso alc


inner join ACD_Aluno alu on alc.ACD_AlunoId=alu.ACD_AlunoId
inner join UNI_Unidade uni on alc.UNI_UnidadeId=uni.UNI_UnidadeId
inner join ACD_Curso cur on cur.ACD_CursoId=alc.ACD_CursoId
inner join ACD_EixoTecnologico eix on cur.ACD_EixoTecnologicoId=eix.ACD_EixoTecnologicoId
inner join ACD_Periodo per on alc.ACD_Periodoid=per.ACD_PeriodoId
inner join PRO_Pessoal pes on alu.PRO_PessoalId=pes.PRO_PessoalId
inner join GER_RegiaoCESU rce on uni.GER_RegiaoCESUCod=rce.GER_RegiaoCESUCod
inner join GER_TipoSituacaoCurso sic on alc.GER_TipoSituacaoCursoId=sic.GER_TipoSituacaoCursoId
inner join GER_TipoSexo     sex on alu.PRO_PessoalId=pes.PRO_PessoalId and pes.GER_TipoSexoId=sex.GER_TipoSexoId
