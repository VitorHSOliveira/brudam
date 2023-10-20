function formatarValor(input) {
    let valor = input.value.replace(/[^\d.]/g, "");
    input.value = valor;
}
